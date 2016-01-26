<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Control extends Model
{
	protected $table = 'control';
	protected $fillable = array('fk_id_paciente','fecha_control','control');

   
    public static function getPacientes(){
    	$Pacientes = \DB::table('paciente')->orderBy('id','desc')->get();
    	//$Pacientes = \DB::table('Paciente')->get();
    	return $Pacientes;
    }

    public static function getDetallePaciente($elId){
    	$detallePaciente = \DB::table('paciente')->where('id','=',$elId)->get(array('id','obra_social','paciente_desde','nombre_apellido','edad','domicilio','telefono','motivo_consulta','actividad_laboral','horario_trabajo','grupo_familiar','patologias',
  		'comsume_medicacion','alergias_alimentarias','talla','peso_habitual','peso_actual','peso_ideal','email','contorno_cintura','contorno_cadera'));
    	return $detallePaciente;
    }

    
}
