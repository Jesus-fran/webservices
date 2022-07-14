<?php

namespace App\Models;

use App\Services\FirebaseService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosFirebase extends Model
{
    use HasFactory;
    private $service;
    
    public function __construct()
    {
        $this->service = new FirebaseService();
    }

    public function getDatosPlanta($planta)
    {
        $datos_planta = ['','',''];
        $hum_arr = ['humedad' => ['fecha'=>'', "hora"=>'', "valor"=>'']];
        $lum_arr = ['luminosidad' => ['fecha'=>'', "hora"=>'', "valor"=>'']];
        $temp_arr = ['temperatura' => ['fecha'=>'', "hora"=>'', "valor"=>'']];
        
        $humedad = $this->service->humedadPlanta($planta);
        $luminosidad = $this->service->luminosidadPlanta($planta);
        $temperatura = $this->service->temperaturaPlanta($planta);
        
        foreach ($humedad as $key => $value) {
            $hum_arr['humedad']['fecha'] = $value['fecha'];
            $hum_arr['humedad']['hora'] = $value['hora'];
            $hum_arr['humedad']['valor'] = $value['valor'];
            $datos_planta[0] = $hum_arr;
        }

        foreach ($luminosidad as $key => $value) {
            $lum_arr['luminosidad']['fecha'] = $value['fecha'];
            $lum_arr['luminosidad']['hora'] = $value['hora'];
            $lum_arr['luminosidad']['valor'] = $value['valor'];
            $datos_planta[1] = $lum_arr;
        }

        foreach ($temperatura as $key => $value) {
            $temp_arr['temperatura']['fecha'] = $value['fecha'];
            $temp_arr['temperatura']['hora'] = $value['hora'];
            $temp_arr['temperatura']['valor'] = $value['valor'];
            $datos_planta[2] = $temp_arr;
        }
        
        return $datos_planta;


    }

    public function getStateSensor($sensor)
    {
        $datos_sensor = ['','',''];
        $sensor_arr = ['activo'=>'', "fecha"=>'', "hora"=>''];
        
        
        $sensor = $this->service->estadoSensor($sensor);
   
        
        foreach ($sensor as $key => $value) {
            if ($value['activo'] == 1) {
                $sensor_arr['activo'] = 'si';
            } else {
                $sensor_arr['activo'] = 'no';
            }
            $sensor_arr['fecha'] = $value['fecha'];
            $sensor_arr['hora'] = $value['hora'];
        }
        
        return $sensor_arr;
    }
}
