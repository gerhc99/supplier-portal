<?php

namespace App\Filament\Resources\InvoiceResource\Pages;

use App\Filament\Resources\InvoiceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use SimpleXMLElement;
use SoapClient;
use Illuminate\Support\Facades\Http;


class CreateInvoice extends CreateRecord
{
    protected static string $resource = InvoiceResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        $xml_data= Storage::disk('public')->get($data['xml_path']);
        //dd($data['xml_path']);
        $Comprobante=new SimpleXMLElement($xml_data);
        $Comprobante->registerXPathNamespace('cfdi', 'http://www.sat.gob.mx/cfd/4');
        $Comprobante->registerXPathNamespace('tfd', 'http://www.sat.gob.mx/TimbreFiscalDigital');
        $data['invoice_no']=$Comprobante['Folio'];
        $data['uuid']= $Comprobante->xpath("//tfd:TimbreFiscalDigital")[0]['UUID'];
        $data['rfc_emisor']= $Comprobante->xpath("//cfdi:Emisor")[0]['Rfc'];
        $data['rfc_receptor']=$Comprobante->xpath("//cfdi:Receptor")[0]['Rfc'];
        $data['sello_cfd']=$Comprobante->xpath("//tfd:TimbreFiscalDigital")[0]['SelloCFD'];
        $data['total']=$Comprobante['Total'];
        $qr='?re='.$data['rfc_emisor'].'&rr='.$data['rfc_receptor'].'&tt='.$data['total'].'&id='. $data['uuid'].'&fe='.substr($data['sello_cfd'],-8);
        //dump($path_sat);

# Agregamos la cadena al envelope
$consulta= array('expresionImpresa'=>$qr);

# URL de servicio productivo
$url = "https://consultaqr.facturaelectronica.sat.gob.mx/ConsultaCFDIService.svc?WSDL";
$url_test="https://pruebacfdiconsultaqr.cloudapp.net/ConsultaCFDIService.svc?WSDL";
$client = new SoapClient($url);
$buscar = $client->Consulta($consulta);

$cfdi = $buscar->ConsultaResult->CodigoEstatus;
$estado = $buscar->ConsultaResult->Estado;
//$data['status_sat']=$buscar->ConsultaResult->CodigoEstatus.'-'.$buscar->ConsultaResult->EsCancelable.'-'.$buscar->ConsultaResult->Estado.'-'.$buscar->ConsultaResult->EstatusCancelacion.'-'.$buscar->ConsultaResult->ValidacionEFOS;
$data['status_sat']=$estado;
        return $data;
    }

    protected function handleRecordCreation(array $data): Model
    {

        return static::getModel()::create($data);
    }
}
