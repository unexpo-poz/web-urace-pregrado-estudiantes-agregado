<?php
		$fechaTraerDep = array (	0=> ' Lunes 28/08/2006',
									2=> ' Martes 29/08/2006',
									4=> ' Mi&eacute;rcoles 30/08/2006',
									6=> ' Jueves 31/08/2006',
									8=> ' Viernes 01/09/2006',
									1=> ' Lunes 28/08/2006',
									3=> ' Martes 29/08/2006',
									5=> ' Mi&eacute;rcoles 30/08/2006',
									7=> ' Jueves 31/08/2006',
									9=> ' Viernes 01/09/2006'
								);

		//mensaje para instrucciones:
		$elDia = intval(substr($datos_p[0],-1,1));
		$laFecha = $fechaTraerDep[$elDia];
		$msgI  = " ATENCION: INICIO DEL LAPSO ACAD&Eacute;MICO 2008-1 EL LUNES 07/04/2008";
?>