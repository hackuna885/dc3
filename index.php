<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
date_default_timezone_set('America/Mexico_City');


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC-3</title>
    <style>
        @media print {
            .hoja {
                page-break-before: always;
            }
        }
    
        .marcoP {
            display: flex;
            align-items: center;
        }
    
        .hoja{
    			margin: 0 auto;
    			width: 730px;
			    height: 980px;
    			text-align:  justify;
    	}
        body {
            font-family: Arial, sans-serif;
        }
    
        table {
            border-collapse: collapse;
        }
    
        th {
            padding: 1px 4px;
        }
    
        td {
            text-align: center;
            border-left: 1px solid black;
            padding: 1px 4px;
        }
        .tSinBordes {
            text-align: center;
            border-left: 0px solid black;
            padding: 0px 4px;
        }
    </style>
</head>
<body>


<?php 


$con = new SQLite3("protected/data/datos.db") or die("Problemas para conectar!");

$cs = $con -> query("SELECT * FROM personal ");
while ($datos = $cs->fetchArray()) {
    $nombre = $datos['nombre'];
    $curp = $datos['curp'];
    $ocupacion = $datos['ocupacion'];
    $puesto = $datos['puesto'];
    $nRasonEmpresa = $datos['nRasonEmpresa'];
    $regFede = $datos['regFede'];
    $nomCurso = $datos['nomCurso'];
    $duracion = $datos['duracion'];
    $pAnoIni = $datos['pAnoIni'];
    $pMesIni = $datos['pMesIni'];
    $pDiaIni = $datos['pDiaIni'];
    $pAnoFin = $datos['pAnoFin'];
    $pMesFin = $datos['pMesFin'];
    $pDiaFin = $datos['pDiaFin'];
    $areaTemCurso = $datos['areaTemCurso'];
    $nomAgenteCap = $datos['nomAgenteCap'];
    $nomInstruc = $datos['nomInstruc'];
    $nomRepTra = $datos['nomRepTra'];
    $nomPatron = $datos['nomPatron'];

    //Mayusculas
    $nombre = strtoupper($nombre);
    $curp = strtoupper($curp);
    $puesto = strtoupper($puesto);
    $nRasonEmpresa = strtoupper($nRasonEmpresa);
    $regFede = strtoupper($regFede);
    $nomCurso = strtoupper($nomCurso);
    $duracion = strtoupper($duracion);

    //Separador CURP
    $curp0v = substr($curp, 0, 1);
    $curp1v = substr($curp, 1, 1);
    $curp2v = substr($curp, 2, 1);
    $curp3v = substr($curp, 3, 1);
    $curp4v = substr($curp, 4, 1);
    $curp5v = substr($curp, 5, 1);
    $curp6v = substr($curp, 6, 1);
    $curp7v = substr($curp, 7, 1);
    $curp8v = substr($curp, 8, 1);
    $curp9v = substr($curp, 9, 1);
    $curp10v = substr($curp, 10, 1);
    $curp11v = substr($curp, 11, 1);
    $curp12v = substr($curp, 12, 1);
    $curp13v = substr($curp, 13, 1);
    $curp14v = substr($curp, 14, 1);
    $curp15v = substr($curp, 15, 1);
    $curp16v = substr($curp, 16, 1);
    $curp17v = substr($curp, 17, 1);

    //Separador RFC
    $regFede0v = substr($regFede, 0, 1);
    $regFede1v = substr($regFede, 1, 1);
    $regFede2v = substr($regFede, 2, 1);
    $regFede3v = substr($regFede, 3, 1);
    $regFede4v = substr($regFede, 4, 1);
    $regFede5v = substr($regFede, 5, 1);
    $regFede6v = substr($regFede, 6, 1);
    $regFede7v = substr($regFede, 7, 1);
    $regFede8v = substr($regFede, 8, 1);
    $regFede9v = substr($regFede, 9, 1);
    $regFede10v = substr($regFede, 10, 1);
    $regFede11v = substr($regFede, 11, 1);
    $regFede12v = substr($regFede, 12, 1);

    //Separador FechaIni
    $pAnoIni0v = substr($pAnoIni, 0, 1);
    $pAnoIni1v = substr($pAnoIni, 1, 1);
    $pAnoIni2v = substr($pAnoIni, 2, 1);
    $pAnoIni3v = substr($pAnoIni, 3, 1);

    $pMesIni0v = substr($pMesIni, 0, 1);
    $pMesIni1v = substr($pMesIni, 1, 1);

    $pDiaIni0v = substr($pDiaIni, 0, 1);
    $pDiaIni1v = substr($pDiaIni, 1, 1);

    //Separador FechaFin
    $pAnoFin0v = substr($pAnoFin, 0, 1);
    $pAnoFin1v = substr($pAnoFin, 1, 1);
    $pAnoFin2v = substr($pAnoFin, 2, 1);
    $pAnoFin3v = substr($pAnoFin, 3, 1);

    $pMesFin0v = substr($pMesFin, 0, 1);
    $pMesFin1v = substr($pMesFin, 1, 1);

    $pDiaFin0v = substr($pDiaFin, 0, 1);
    $pDiaFin1v = substr($pDiaFin, 1, 1);


echo '
   <div class="marcoP"> 
        <div class="hoja">

            <div style="position: absolute; z-index: -1;">
                <img src="img/hFondo_.svg" style="height: 950px;">
            </div>
            <div>
                <div style="width: 655px; margin-top: 130px; margin-left: 38px;">
                    <div style="text-align: center;">
                        <h4>FORMATO DC-3
                            <br>
                            CONSTANCIA DE COMPETENCIAS O DE HABILIDADES LABORALES
                        </h4>
                    </div>
                    <div style="text-align: center; color: #FFF; margin-top: -13px;">
                        <h5>DATOS DEL TRABAJADOR</h5>
                    </div>
                    <div style="font-size: .6em; margin-top: -13px;">
                        <p>Nombre (Anotar apellido paterno, apellido materno y nombre (s))</p>
                    </div>
                    <div style="font-size: .8em; margin-top: -5px;">
                        <p>'.$nombre.'</p>
                    </div>
                    <div style="font-size: .6em; margin-top: -8px;">
                        <div style="width: 320px; display: inline;">Clave Única de Registro de Población</div>
                        <div style="margin-left: 160px; display: inline;">Ocupación específica (Catálogo Nacional de Ocupaciones) 1/
                        <br>
                        </div>
                    </div>
                    <div style="font-size: .8em; margin-top: 1px;">
                        <table style="display: inline;">
                            <tr>
                                <td style="border-left: 0px solid black;">'.$curp0v.'</td>
                                <td>'.$curp1v.'</td>
                                <td>'.$curp2v.'</td>
                                <td>'.$curp3v.'</td>
                                <td>'.$curp4v.'</td>
                                <td>'.$curp5v.'</td>
                                <td>'.$curp6v.'</td>
                                <td>'.$curp7v.'</td>
                                <td>'.$curp8v.'</td>
                                <td>'.$curp9v.'</td>
                                <td>'.$curp10v.'</td>
                                <td>'.$curp11v.'</td>
                                <td>'.$curp12v.'</td>
                                <td>'.$curp13v.'</td>
                                <td>'.$curp14v.'</td>
                                <td>'.$curp15v.'</td>
                                <td>'.$curp16v.'</td>
                                <td>'.$curp17v.'</td>
                            </tr>
                        </table>
                        <div style="display: inline; margin-left: 15px;">'.$ocupacion.'</div>
                    </div>
                    <div style="font-size: .6em; margin-top: -10px;">
                        <p>Puesto*</p>
                    </div>
                    <div style="font-size: .8em; margin-top: -10px;">
                        <p>'.$puesto.'</p>
                    </div>
                    <div style="text-align: center; color: #FFF; margin-top: -5px;">
                    <h5>DATOS DE LA EMPRESA</h5>
                    </div>
                    <div style="font-size: .6em; margin-top: -12px;">
                        <p>Nombre o razón social (En caso de persona física, anotar apellido paterno, apellido materno y nombre(s))</p>
                    </div>
                    <div style="font-size: .8em; margin-top: -5px;">
                        <p>'.$nRasonEmpresa.'</p>
                    </div>
                    <div style="font-size: .6em; margin-top: -9px;">
                        <p>Registro Federal de Contribuyentes con homoclave (SHCP)</p>
                    </div>
                    <div style="font-size: .8em; margin-top: -10px;">
                        <table style="display: inline;">
                            <tr>
                                <td>'.$regFede0v.'</td>
                                <td>'.$regFede1v.'</td>
                                <td>'.$regFede2v.'</td>
                                <td>'.$regFede3v.'</td>
                                <td>'.$regFede4v.'</td>
                                <td>'.$regFede5v.'</td>
                                <td>'.$regFede6v.'</td>
                                <td>'.$regFede7v.'</td>
                                <td>'.$regFede8v.'</td>
                                <td>'.$regFede9v.'</td>
                                <td>'.$regFede10v.'</td>
                                <td>'.$regFede11v.'</td>
                                <td>'.$regFede12v.'</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div style="text-align: center; color: #FFF; margin-top: -8px;">
                        <h5>DATOS DEL PROGRAMA DE CAPACITACIÓN, ADIESTRAMIENTO Y PRODUCTIVIDAD</h5>
                    </div>
                    <div style="font-size: .6em; margin-top: -15px;">
                        <p>Nombre del curso</p>
                    </div>
                    <div style="font-size: .8em; margin-top: -10px;">
                        <p>'.$nomCurso.'</p>
                    </div>
                    <div style="font-size: .6em; margin-top: -8px;">
                        <div style="width: 120px; display: inline;">Duración en horas</div>
                        <div style="margin-left: 105px; display: inline;">Periodo de
                        </div>
                        <div style="margin-left: 57px; display: inline;">Año
                        </div>
                        <div style="margin-left: 43px; display: inline;">Mes
                        </div>
                        <div style="margin-left: 30px; display: inline;">Día
                        </div>
                        <div style="margin-left: 80px; display: inline;">Año
                        </div>
                        <div style="margin-left: 50px; display: inline;">Mes
                        </div>
                        <div style="margin-left: 31px; display: inline;">Día
                        </div>
                    </div>
                    <div style="margin-top: -3px;">
                        <div style="width: 120px; display: inline; font-size: .8em;">'.$duracion.'</div>
                        <div style="margin-left: 150px; display: inline; font-size: .6em;">ejecución:
                        </div>
                        <div style="margin-left: 15px; display: inline; font-size: .8em;">De
                        </div>
                        <div style="margin-left: 10px; display: inline; font-size: .8em;">'.$pAnoIni0v.'
                        </div>
                        <div style="margin-left: 6px; display: inline; font-size: .8em;">'.$pAnoIni1v.'
                        </div>
                        <div style="margin-left: 8px; display: inline; font-size: .8em;">'.$pAnoIni2v.'
                        </div>
                        <div style="margin-left: 6px; display: inline; font-size: .8em;">'.$pAnoIni3v.'
                        </div>
                        <div style="margin-left: 15px; display: inline; font-size: .8em;">'.$pMesIni0v.'
                        </div>
                        <div style="margin-left: 14px; display: inline; font-size: .8em;">'.$pMesIni1v.'
                        </div>
                        <div style="margin-left: 15px; display: inline; font-size: .8em;">'.$pDiaIni0v.'
                        </div>
                        <div style="margin-left: 13px; display: inline; font-size: .8em;">'.$pDiaIni1v.'
                        </div>
                        <div style="margin-left: 15px; display: inline; font-size: .8em;">a
                        </div>
                        <div style="margin-left: 15px; display: inline; font-size: .8em;">'.$pAnoFin0v.'
                        </div>
                        <div style="margin-left: 12px; display: inline; font-size: .8em;">'.$pAnoFin1v.'
                        </div>
                        <div style="margin-left: 13px; display: inline; font-size: .8em;">'.$pAnoFin2v.'
                        </div>
                        <div style="margin-left: 11px; display: inline; font-size: .8em;">'.$pAnoFin3v.'
                        </div>
                        <div style="margin-left: 15px; display: inline; font-size: .8em;">'.$pMesFin0v.'
                        </div>
                        <div style="margin-left: 14px; display: inline; font-size: .8em;">'.$pMesFin1v.'
                        </div>
                        <div style="margin-left: 15px; display: inline; font-size: .8em;">'.$pDiaFin0v.'
                        </div>
                        <div style="margin-left: 13px; display: inline; font-size: .8em;">'.$pDiaFin1v.'
                        </div>
                    </div>
                    <div style="font-size: .6em; margin-top: -7px;">
                        <p>Área temática del curso 2/</p>
                    </div>
                    <div style="font-size: .8em; margin-top: -11px;">
                        <p>'.$areaTemCurso.'</p>
                    </div>
                    <div style="font-size: .6em; margin-top: -13px;">
                        <p>Nombre del agente capacitador o STPS 3/</p>
                    </div>
                    <div style="font-size: .8em; margin-top: -12px;">
                        <p>'.$nomAgenteCap.'</p>
                    </div>
                    <div style="text-align: center; font-size: .6em; margin-top: 20px; padding: 0px 50px;">
                        <p><b>Los datos se asientan en esta constancia bajo protesta de decir verdad, apercibidos de la responsabilidad en que incurre
                        todo aquel que no se conduce con verdad.</b></p>
                    </div>
                    <div style="font-size: .6em; margin-top: 30px;">
                        <table style="text-align: center;">
                            <tr>
                                <td class="tSinBordes" style="width: 218px;">Instructor o tutor</td>
                                <td class="tSinBordes" style="width: 218px;">Patrón o representante legal 4/</td>
                                <td class="tSinBordes" style="width: 218px;">Representante de los trabajadores 5/</td>
                            </tr>
                            <tr>
                                <td class="tSinBordes">
                                    <img src="img/fFaby-01.svg" style="height: 74px; margin-top: -20px;">
                                    <!-- <img src="img/fFaby-01.svg" style="height: 74px; margin-top: -20px; visibility: hidden;"> -->
                                </td>
                                <td class="tSinBordes"></td>
                                <td class="tSinBordes"></td>
                            </tr>
                            <tr style="font-size: 1.1em;">
                                <td class="tSinBordes">'.$nomInstruc.'</td>
                                <td class="tSinBordes">'.$nomRepTra.'</td>
                                <td class="tSinBordes">'.$nomPatron.'</td>
                            </tr>
                            <tr>
                                <td class="tSinBordes">Nombre y firma</td>
                                <td class="tSinBordes">Nombre y firma</td>
                                <td class="tSinBordes">Nombre y firma</td>
                            </tr>
                        </table>
                    </div>
                    <div style="font-size: .8em; margin-top: 25px;">
                        <p><b>INSTRUCCIONES</b></p>
                    </div>
                    <div style="font-size: .5em; margin-top: -10px;">
                        <div style="padding: 1.3px 10px;">
                            <span style="font-size: .8em; padding-right: 10px; text-align: center;">-</span>Llenar a máquina o con letra de molde.
                        </div>
                        <div style="padding: 1.3px 10px;">
                            <span style="font-size: .8em; padding-right: 10px; text-align: center;">-</span>Deberá entregarse al trabajador dentro de los veinte días hábiles siguientes al término del curso de capacitación
                            aprobado.
                        </div>
                        <div style="padding: 1.3px 10px;">
                            <span style="font-size: .8em; padding-right: 10px; text-align: center;">1/</span>Las áreas y subáreas ocupacionales del Catálogo Nacional de Ocupaciones se encuentran disponibles en el reverso de este formato y en la página www.stps.gob.mx
                        </div>
                        <div style="padding: 1.3px 10px;">
                            <span style="font-size: .8em; padding-right: 10px; text-align: center;">2/</span>Las áreas temáticas de los cursos se encuentran disponibles en el reverso de este formato y en la página
                            www.stps.gob.mx
                        </div>
                        <div style="padding: 1.3px 10px;">
                            <span style="font-size: .8em; padding-right: 10px; text-align: center;">3/</span>Cursos impartidos por el área competente de la Secretaria del Trabajo y Previsión Social.
                        </div>
                        <div style="padding: 1.3px 10px;">
                            <span style="font-size: .8em; padding-right: 10px; text-align: center;">4/</span>Para empresas con menos de 51 trabajadores. Para empresas con más de 50 trabajadores firmaría el representante del
                            patrón ante la Comisión mixta de capacitación, adiestramiento y productividad.
                        </div>
                        <div style="padding: 1.3px 10px;">
                            <span style="font-size: .8em; padding-right: 10px; text-align: center;">5/</span>Solo para empresas con más de 50 trabajadores.
                        </div>
                        <div style="padding: 1.3px 10px;">
                            <span style="font-size: .8em; padding-right: 10px; text-align: center;">*</span>Dato no obligatorio.

                        </div>
                        <div style="margin-left: 550px; margin-top: 30px; font-size: 1.2em;">
                            <p style="text-align: center;">DC-3
                                <br>
                                ANVERSO
                            </p>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>

    <div class="marcoP">
        <div class="hoja">
            <div>
                <div style="width: 655px; margin-top: 30px; margin-left: 38px;">
                    <div style="text-align: center; font-size: .6em;">
                        <b>CLAVES Y DENOMINACIONES DE ÁREAS Y SUBÁREAS DEL CATÁLOGO NACIONAL DE OCUPACIONES
                        </b>
                    </div>
                    <table style="font-size: .6em;">
                        <tr>
                            <td class="tSinBordes" style="width: 163px; padding: 10px;"><b>CLAVE DEL ÁREA/SUBÁREA</b></td>
                            <td class="tSinBordes" style="width: 163px; padding: 10px;"><b>DENOMINACIÓN</b></td>
                            <td class="tSinBordes" style="width: 163px; padding: 10px;"><b>CLAVE DEL ÁREA/SUBÁREA</b></td>
                            <td class="tSinBordes" style="width: 163px; padding: 10px;"><b>DENOMINACIÓN</b></td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">01</td>
                            <td class="tSinBordes" style="text-align: left;">Cultivo, crianza y aprovechamiento</td>
                            <td class="tSinBordes">06</td>
                            <td class="tSinBordes" style="text-align: left;">Transporte</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">01.1</td>
                            <td class="tSinBordes" style="text-align: left;">Agricultura y silvicultura</td>
                            <td class="tSinBordes">06.1</td>
                            <td class="tSinBordes" style="text-align: left;">Ferroviario</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">01.2</td>
                            <td class="tSinBordes" style="text-align: left;">Ganadería</td>
                            <td class="tSinBordes">06.2</td>
                            <td class="tSinBordes" style="text-align: left;">Autotransporte</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">01.3</td>
                            <td class="tSinBordes" style="text-align: left;">Pesca y acuacultura</td>
                            <td class="tSinBordes">06.3</td>
                            <td class="tSinBordes" style="text-align: left;">Aéreo</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes"></td>
                            <td class="tSinBordes" style="text-align: left;"></td>
                            <td class="tSinBordes">06.4</td>
                            <td class="tSinBordes" style="text-align: left;">Marítimo y fluvial</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">02</td>
                            <td class="tSinBordes" style="text-align: left;">Extracción y suministro</td>
                            <td class="tSinBordes">06.5</td>
                            <td class="tSinBordes" style="text-align: left;">Servicios de apoyo</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">02.1</td>
                            <td class="tSinBordes" style="text-align: left;">Exploración</td>
                            <td class="tSinBordes"></td>
                            <td class="tSinBordes" style="text-align: left;"></td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">02.2</td>
                            <td class="tSinBordes" style="text-align: left;">Extracción</td>
                            <td class="tSinBordes">07</td>
                            <td class="tSinBordes" style="text-align: left;">Provisión de bienes y servicios</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">02.3</td>
                            <td class="tSinBordes" style="text-align: left;">Refinación y beneficio</td>
                            <td class="tSinBordes">07.1</td>
                            <td class="tSinBordes" style="text-align: left;">Comercio</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">02.4</td>
                            <td class="tSinBordes" style="text-align: left;">Provisión de energía</td>
                            <td class="tSinBordes">07.2</td>
                            <td class="tSinBordes" style="text-align: left;">Alimentación y hospedaje</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">02.5</td>
                            <td class="tSinBordes" style="text-align: left;">Provisión de agua</td>
                            <td class="tSinBordes">07.3</td>
                            <td class="tSinBordes" style="text-align: left;">Turismo</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes"></td>
                            <td class="tSinBordes" style="text-align: left;"></td>
                            <td class="tSinBordes">07.4</td>
                            <td class="tSinBordes" style="text-align: left;">Deporte y esparcimiento</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">03</td>
                            <td class="tSinBordes" style="text-align: left;">Construcción</td>
                            <td class="tSinBordes">07.5</td>
                            <td class="tSinBordes" style="text-align: left;">Servicios personales</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">03.1</td>
                            <td class="tSinBordes" style="text-align: left;">Planeación y dirección de obras</td>
                            <td class="tSinBordes">07.6</td>
                            <td class="tSinBordes" style="text-align: left;">Reparación de artículos de uso doméstico y personal</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">03.2</td>
                            <td class="tSinBordes" style="text-align: left;">Edificación y urbanización</td>
                            <td class="tSinBordes">07.7</td>
                            <td class="tSinBordes" style="text-align: left;">Limpieza</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">03.3</td>
                            <td class="tSinBordes" style="text-align: left;">Acabado</td>
                            <td class="tSinBordes">07.8</td>
                            <td class="tSinBordes" style="text-align: left;">Servicio postal y mensajería</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">03.4</td>
                            <td class="tSinBordes" style="text-align: left;">Instalación y mantenimiento</td>
                            <td class="tSinBordes"></td>
                            <td class="tSinBordes" style="text-align: left;"></td>
                        </tr>
                        <tr>
                            <td class="tSinBordes"></td>
                            <td class="tSinBordes" style="text-align: left;"></td>
                            <td class="tSinBordes">08</td>
                            <td class="tSinBordes" style="text-align: left;">Gestión y soporte administrativo</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">04</td>
                            <td class="tSinBordes" style="text-align: left;">Tecnología</td>
                            <td class="tSinBordes">08.1</td>
                            <td class="tSinBordes" style="text-align: left;">Bolsa, banca y seguros</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">04.1</td>
                            <td class="tSinBordes" style="text-align: left;">Mecánica</td>
                            <td class="tSinBordes">08.2</td>
                            <td class="tSinBordes" style="text-align: left;">Administración</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">04.2</td>
                            <td class="tSinBordes" style="text-align: left;">Electricidad</td>
                            <td class="tSinBordes">08.3</td>
                            <td class="tSinBordes" style="text-align: left;">Servicios legales</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">04.3</td>
                            <td class="tSinBordes" style="text-align: left;">Electrónica</td>
                            <td class="tSinBordes"></td>
                            <td class="tSinBordes" style="text-align: left;"></td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">04.4</td>
                            <td class="tSinBordes" style="text-align: left;">Informática</td>
                            <td class="tSinBordes">09</td>
                            <td class="tSinBordes" style="text-align: left;">Salud y protección social</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">04.5</td>
                            <td class="tSinBordes" style="text-align: left;">Telecomunicaciones</td>
                            <td class="tSinBordes">09.1</td>
                            <td class="tSinBordes" style="text-align: left;">Servicios médicos</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">04.6</td>
                            <td class="tSinBordes" style="text-align: left;">Procesos industriales</td>
                            <td class="tSinBordes">09.2</td>
                            <td class="tSinBordes" style="text-align: left;">Inspección sanitaria y del medio ambiente</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes"></td>
                            <td class="tSinBordes" style="text-align: left;"></td>
                            <td class="tSinBordes">09.3</td>
                            <td class="tSinBordes" style="text-align: left;">Seguridad social</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">05</td>
                            <td class="tSinBordes" style="text-align: left;">Procesamiento y fabricación</td>
                            <td class="tSinBordes">09.4</td>
                            <td class="tSinBordes" style="text-align: left;">Protección de bienes y/o personas</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">05.1</td>
                            <td class="tSinBordes" style="text-align: left;">Minerales no metálicos</td>
                            <td class="tSinBordes"></td>
                            <td class="tSinBordes" style="text-align: left;"></td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">05.2</td>
                            <td class="tSinBordes" style="text-align: left;">Metales</td>
                            <td class="tSinBordes">10</td>
                            <td class="tSinBordes" style="text-align: left;">Comunicación</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">05.3</td>
                            <td class="tSinBordes" style="text-align: left;">Alimentos y bebidas</td>
                            <td class="tSinBordes">10.1</td>
                            <td class="tSinBordes" style="text-align: left;">Publicación</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">05.4</td>
                            <td class="tSinBordes" style="text-align: left;">Textiles y prendas de vestir</td>
                            <td class="tSinBordes">10.2</td>
                            <td class="tSinBordes" style="text-align: left;">Radio, cine, televisión y teatro</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">05.5</td>
                            <td class="tSinBordes" style="text-align: left;">Materia orgánica</td>
                            <td class="tSinBordes">10.3</td>
                            <td class="tSinBordes" style="text-align: left;">Interpretación artística</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">05.6</td>
                            <td class="tSinBordes" style="text-align: left;">Productos químicos</td>
                            <td class="tSinBordes">10.4</td>
                            <td class="tSinBordes" style="text-align: left;">Traducción e interpretación lingüística</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">05.7</td>
                            <td class="tSinBordes" style="text-align: left;">Productos metálicos y de hule y plástico</td>
                            <td class="tSinBordes">10.5</td>
                            <td class="tSinBordes" style="text-align: left;">Publicidad, propaganda y relaciones públicas</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">05.8</td>
                            <td class="tSinBordes" style="text-align: left;">Productos eléctricos y electrónicos</td>
                            <td class="tSinBordes"></td>
                            <td class="tSinBordes" style="text-align: left;"></td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">05.9</td>
                            <td class="tSinBordes" style="text-align: left;">Productos impresos</td>
                            <td class="tSinBordes">11</td>
                            <td class="tSinBordes" style="text-align: left;">Desarrollo y extensión del conocimiento</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes"></td>
                            <td class="tSinBordes" style="text-align: left;"></td>
                            <td class="tSinBordes">11.1</td>
                            <td class="tSinBordes" style="text-align: left;">Investigación</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes"></td>
                            <td class="tSinBordes" style="text-align: left;"></td>
                            <td class="tSinBordes">11.2</td>
                            <td class="tSinBordes" style="text-align: left;">Enseñanza</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes"></td>
                            <td class="tSinBordes" style="text-align: left;"></td>
                            <td class="tSinBordes">11.3</td>
                            <td class="tSinBordes" style="text-align: left;">Difusión cultural</td>
                        </tr>
                    </table>


                    <div style="text-align: center; font-size: .6em; margin-top: 40px;">
                        <b>CLAVES Y DENOMINACIONES DEL CATÁLOGO DE ÁREAS TEMÁTICAS DE LOS CURSOS
                        </b>
                    </div>
                    <table style="font-size: .6em;">
                        <tr>
                            <td class="tSinBordes" style="width: 163px; padding: 10px;"><b>CLAVE DEL ÁREA</b></td>
                            <td class="tSinBordes" style="width: 163px; padding: 10px;"><b>DENOMINACIÓN</b></td>
                            <td class="tSinBordes" style="width: 163px; padding: 10px;"><b>CLAVE DEL ÁREA</b></td>
                            <td class="tSinBordes" style="width: 163px; padding: 10px;"><b>DENOMINACIÓN</b></td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">1000</td>
                            <td class="tSinBordes" style="text-align: left;">Producción general</td>
                            <td class="tSinBordes">6000</td>
                            <td class="tSinBordes" style="text-align: left;">Seguridad</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">2000</td>
                            <td class="tSinBordes" style="text-align: left;">Servicios</td>
                            <td class="tSinBordes">7000</td>
                            <td class="tSinBordes" style="text-align: left;">Desarrollo personal y familiar</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">3000</td>
                            <td class="tSinBordes" style="text-align: left;">Administración, contabilidad y economía</td>
                            <td class="tSinBordes">8000</td>
                            <td class="tSinBordes" style="text-align: left;">Uso de tecnologías de la información y comunicación</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">4000</td>
                            <td class="tSinBordes" style="text-align: left;">Comercialización</td>
                            <td class="tSinBordes">9000</td>
                            <td class="tSinBordes" style="text-align: left;">Participación social</td>
                        </tr>
                        <tr>
                            <td class="tSinBordes">5000</td>
                            <td class="tSinBordes" style="text-align: left;">Mantenimiento y reparación</td>
                            <td class="tSinBordes"></td>
                            <td class="tSinBordes" style="text-align: left;"></td>
                        </tr>
                    </table>
                    <div style="margin-left: 550px; margin-top: 190px; font-size: .6em;">
                        <p style="text-align: center;">DC-3
                            <br>
                        REVERSO
                        </p>
                    </div>

                    
    
                </div>
            </div>
        </div>
    </div>

';
}

$con -> close();



 ?>


 
 

</body>
</html>