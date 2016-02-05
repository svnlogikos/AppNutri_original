<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Control extends Model
{
	protected $table = 'control';
	protected $fillable = array('fk_id_paciente','fecha_control','control');
	
	public static function existeControl($id_paciente)
	{
    	$existe = Control::where('fk_id_paciente', $id_paciente)->exists();
    	return $existe;
    }

   
    public static function getControles($fk_id_paciente)
	{
    	$Controles = \DB::table('control')->where('fk_id_paciente','=',$fk_id_paciente)->orderBy('fecha_control','asc')->get();
    	return $Controles;
    }
	/*
    public static function getDetallePaciente($elId){
    	$detallePaciente = \DB::table('paciente')->where('id','=',$elId)->get(array('id','obra_social','paciente_desde','nombre_apellido','edad','domicilio','telefono','motivo_consulta','actividad_laboral','horario_trabajo','grupo_familiar','patologias',
  		'comsume_medicacion','alergias_alimentarias','talla','peso_habitual','peso_actual','peso_ideal','email','contorno_cintura','contorno_cadera'));
    	return $detallePaciente;
    } */

    
}
