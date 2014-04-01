<?php

$json_oscar=array();

$dios=array();
///Ciudadania
$protestan_a=array();
$protestan_a["name"]="Yo soy 132";
$protestan_a["size"]=3938;
$protestan_a["description"]= "El movimiento YoSoy132 es un movimiento ciudadano conformado en su mayoría por estudiantes mexicanos de educación superior, tanto de instituciones públicas como privadas, residentes en México, así como residentes y simpatizantes 
en más de 50 ciudades del Mundo. El movimiento inicialmente buscaba: la democratización de los medios de comunicación, 
la creación de un tercer debate entre los candidatos presidenciales5 y el rechazo a la supuesta imposición mediática
 de Enrique Peña Nieto como candidato en las elecciones presidenciales 2012.";

$los_hijos_que_protestan=array();
array_push($los_hijos_que_protestan, $protestan_a);
$protestan=array();
$protestan["name"]="Protestan";//nombre
$protestan["children"]=$los_hijos_que_protestan;//array [];

//ciudadania que protesta^
// Se Crean los hijos a  mano por lo cual se debe cambiar el valor del "name " por el que se desea
$laoms_a=array();
$laoms_a["name"]="Jorge Cadena Roa";
$laoms_a["size"]=3938;
$laoms_a["description"]="Coordinador del  Laboratorio de Análisis de Organizaciones y Movimientos Sociales (LAOMS)";

$laoms_b=array();
$laoms_b["name"]="Becario 1";
$laoms_b["size"]=3938;
$laoms_b["description"]="Becario del  Laboratorio de Análisis de Organizaciones y Movimientos Sociales (LAOMS), trabaja con Jorge Cadena Roa";

$laoms_c=array();
$laoms_c["name"]="Becario 2";
$laoms_c["size"]=3938;
$laoms_c["description"]="Becario del  Laboratorio de Análisis de Organizaciones y Movimientos Sociales (LAOMS), trabaja con Jorge Cadena Roa";


//Se añaden los hijos de laoms a mano a un array (los agrupamos)
$los_hijos_de_laosm=array();
array_push($los_hijos_de_laosm, $laoms_a);
array_push($los_hijos_de_laosm, $laoms_b);
array_push($los_hijos_de_laosm, $laoms_c);
//array_push($los_hijos_de_laosm, $laoms_e);

// Cuando los hijos estan Creados Creamos al padre Laoms
$noprotestan_academicos_laoms=array();
$noprotestan_academicos_laoms["name"]="LAOMS";
$noprotestan_academicos_laoms["children"]=$los_hijos_de_laosm;

//Creamos un array que servira para agrumar todos los hijos de la unam
//$hijos_de_unam=array();
//añadimos a el grupo de hijos de la unam el grupo del hijo la oms
//array_push($hijos_de_unam, $noprotestan_academicos_laoms);
//se crea al abuelo que contendra al padre (laoms) y a los hijos 
//$noprotestan_academicos_unam=array();
//$noprotestan_academicos_unam["name"]="UNAM";
//se añaden los hijos de la unam (laoms) que ya contiene un grupo con sus hijos
//$noprotestan_academicos_unam["children"]=$hijos_de_unam;

//se crea el gurpo  que es al que pertenece la unam ya con sus hijos y nietos
$noprotestan_academicos_hijos=array();
array_push($noprotestan_academicos_hijos, $noprotestan_academicos_laoms);

// se crea el bisabuelo y se añade el grupo de hijos que quieran
$noprotestan_academicos=array();
$noprotestan_academicos["name"]="Academicos";
$noprotestan_academicos["children"]=$noprotestan_academicos_hijos;
// Ciudadania que no protesta ACADEMICA ^

/////////////////////////////////
$noprotestan_peatones=array();
$noprotestan_peatones["name"]="Transeúntes";

$names=array();
array_push($names, "Usuarios transporte público");
array_push($names, "Peatones");
$names_description=array();
array_push($names_description, "Durante las protestas en la ciudad, los bloqueos a la circulación afectan también a los carriles exclusivos de Metrobus, Trolebús y a aquellos que circulan
	con el resto del tránsito vehicular. Sus usuarios son directamente afectados cuando esto ocurre.");
array_push($names_description, "Todo usuario de transporte público es un peatón. La manera de acceder a las estaciones es caminando. En ocasiones, cuando el transporte público deja de funcionar durante la protesta, el medio más sencillo es caminar.

	Aunque en sentido estricto una protesta implica una masa crítica de peatones, muchas veces los que buscan llegar un punto A a un punto B, únicamente atraviesan la protesta sin mayor dificultad.");
$noprotestan_peatones["children"]=crear_hijos_personalizados(2,$names,$names_description);


// Ciudadania que no protesta Peatones ^
$medios=array();
$medios=crear_padres_sin_hijos("Medios");
$medios1=array();

$hijos_jornada_nombre=array();
array_push($hijos_jornada_nombre, "Agustín Salgado");
$hijos_jornada_nombre_desc=array();
array_push($hijos_jornada_nombre_desc, "Periodista que ha cubierto distintos tipos de protesta dentro del Distrito Federal");

array_push($medios1, crear_padres_hijos_personalizados("La Jornada",1,$hijos_jornada_nombre,$hijos_jornada_nombre_desc));

$hijos_universal_nombre=array();
array_push($hijos_universal_nombre, "Gerardo Suárez");
array_push($hijos_universal_nombre, "Phenélope Aldaz");
$hijos_universal_nombre_desc=array();
array_push($hijos_universal_nombre_desc, "Periodista que ha cubierto distintos tipos de protesta dentro del Distrito Federal");
array_push($hijos_universal_nombre_desc, "Periodista que ha cubierto distintos tipos de protesta dentro del Distrito Federal");
array_push($medios1, crear_padres_hijos_personalizados("El Universal",2,$hijos_universal_nombre,$hijos_universal_nombre_desc));

$medios["children"]=$medios1;

//Creamos el array para todos los que no protestan y los metemos
$hijos_ciudania_no_protestan=array();
array_push($hijos_ciudania_no_protestan, $noprotestan_academicos);
array_push($hijos_ciudania_no_protestan, $noprotestan_peatones);

$hijos_cochista=array();
array_push($hijos_cochista, "Apoyan la causa");
array_push($hijos_cochista, "No apoyan la causa");
$hijos_cochista_desc=array();
array_push($hijos_cochista_desc, "Durante una protesta, los automovilistas tienden a quedar encerrados dentro de la marcha, debido al espacio que requieren para circular en la ciudad. Sin embargo, algunas veces los mismos automovilistas apoyan la causa o el por qué de la protesta cuando conocen la causa");
array_push($hijos_cochista_desc, "Durante una protesta, los automovilistas tienden a quedar encerrados dentro de la marcha, debido al espacio que requieren para circular en la ciudad. Este tipo de usuarios recurren a las noticias de la radio donde la cobertura no es muy amplia y generalmente anuncian únicamente una marcha o bloqueo, sin mayor información de los actores involucrados");
array_push($hijos_ciudania_no_protestan, crear_padres_hijos_personalizados("Automovilistas",2,$hijos_cochista,$hijos_cochista_desc));

$hijos_ciclista=array();
array_push($hijos_ciclista, "Apoyan la causa");
array_push($hijos_ciclista, "No apoyan la causa");
$hijos_ciclista_desc=array();
array_push($hijos_ciclista_desc, "En ocasiones, cuando un contingente de ciclistas decide unirse a un contingente, dado el tamaño del vehículo y la faciliad de introducirse al espacio, puede decidir entrar a la marcha");
array_push($hijos_ciclista_desc, "Cuando un ciclista o un contingente no apoya la causa, dado el espacio que requiere, es fácil para ellos cruzar el contingente y continuar su camino");
array_push($hijos_ciudania_no_protestan, crear_padres_hijos_personalizados("ciclistas",2,$hijos_ciclista,$hijos_ciclista_desc));

array_push($hijos_ciudania_no_protestan, $medios);

$noprotestan=array();
$noprotestan["name"]="No Protestan";//nombre
$noprotestan["children"]=$hijos_ciudania_no_protestan;//array [];

//ciudadania que no protesta ^


$hijos_ciudadania=array();
array_push($hijos_ciudadania, $protestan);
array_push($hijos_ciudadania, $noprotestan);

$ciudadania=array();
$ciudadania["name"]="Ciudadania";//nombre
$ciudadania["children"]=$hijos_ciudadania;//array [];


//////////////////Gobierno
$legislativo_temp=array();
$legislativo=crear_padres_sin_hijos("Legislativo");

$hijos_dipulocal=array();
array_push($hijos_dipulocal, "Jorge Sotomayor");
array_push($hijos_dipulocal, "Laura Ballesteros");
$hijos_dipulocaldesc=array();
array_push($hijos_dipulocaldesc, "Jorge Francisco Sotomayor Chávez
Diputado federal por el Partido Acción Nacional
Presentó una propuesta para regular las marchas en la Ciudad de México");
array_push($hijos_dipulocaldesc, "Laura Ballesteros Mancilla
Diputada local por el Partido Acción Nacional
Presentó una propuesta de Ley de Movilidad que incluía una regulación a las marchas en la Ciudad de México");
array_push($legislativo_temp, crear_padres_hijos_personalizados("Diputado",2,$hijos_dipulocal,$hijos_dipulocaldesc));



//$legislativo_federales_temp=array();
//$legislativo_federales=crear_padres_sin_hijos("Federales");
//array_push($legislativo_federales_temp, crear_padres("Diputados"));
//array_push($legislativo_federales_temp, crear_padres("Senadores"));

//$legislativo_federales["children"]=$legislativo_federales_temp;


//array_push($legislativo_temp, $legislativo_federales);


$legislativo["children"]=$legislativo_temp;


$local_temp=array();
$local=crear_padres_sin_hijos("Local");

$nombres_secgob=array();
array_push($nombres_secgob, "Subsecretario de Gobierno");
array_push($nombres_secgob, "Director General de concertación política y atención social");
array_push($nombres_secgob, "Directora de Concertación política");
array_push($nombres_secgob, "Director de gestión social");
$nombres_secgob_desc=array();
array_push($nombres_secgob_desc, "Juan José García Ochoa
	Vigilar, en el ámbito administrativo, el cumplimiento de los preceptos constitucionales por parte de las autoridades del Distrito Federal, especialmente en lo que se refiere a las garantías individuales y derechos humanos, así como dictar las medidas administrativas que requiera su cumplimiento");
array_push($nombres_secgob_desc, "Israel De Rosas Gazano
Es el encargado de dar seguimiento a los grupos que realizan movilizaciones sociales. Se encarga de canalizar las demandas con las dependencias correspondientes. Dar seguimiento a las negociaciones o trabajo y prevenir que ocurran nuevas protestas en la vía pública.");
array_push($nombres_secgob_desc, "Verenice Tellez Hernández
	Funge como enlace directo para generar el trabajo con los que generan movilizaciones sociales. Identifica necesidades, canaliza demandas y mantiene la comunicación con los demandantes.");
array_push($nombres_secgob_desc, "Pedro Bello Aguilar
	Establece los mecanismos para llevar a cabo todos los trabajos con los ciudadanos que generan movilizaciones sociales");
array_push($local_temp, crear_padres_hijos_personalizados("Secretaría de Gobierno",4,$nombres_secgob, $nombres_secgob_desc));


$nombres_metro=array();
array_push($nombres_metro, "Subdirector General de Operación");
array_push($nombres_metro, "Director de Transportación");
$nombres_metro_desc=array();
array_push($nombres_metro_desc, "Salomón Solay Zyman. 
	Establece los mecanismos y supervisa la operación general del Metro, desde los vagones hasta las estaciones. Cuando hay un acontecimiento especial, se encargan de la logística para mantener el servicio y la seguridad de los usuarios.");
array_push($nombres_metro_desc, "Nahum Leal Barroso. 
	Encargado de mantener los trenes, vías y demás necesarios para el correcto funcionamiento del STC en óptimas condiciones y se encarga de mantener un óptimo servicio en las líneas");
array_push($local_temp, crear_padres_hijos_personalizados("STC Metro",2,$nombres_metro,$nombres_metro_desc));

$nombres_metrobus=array();
array_push($nombres_metrobus, "Dirección Técnico Operativa");
$nombres_metrobus_desc=array();
array_push($nombres_metrobus_desc, "Establece los lineamientos del funcionamiento de Metrobús. En caso de una marcha, establecen los criterios para mantener el servicio de la mejor manera posible");
array_push($local_temp, crear_padres_hijos_personalizados("Metrobus",1,$nombres_metrobus,$nombres_metrobus_desc));

$nombres_ssp=array();
array_push($nombres_ssp, "Dirección General de la policía metropolitana");
array_push($nombres_ssp, "Dirección General de operación de tránsito");
$nombres_ssp_desc=array();
array_push($nombres_ssp_desc, "perrito");
array_push($nombres_ssp_desc, "DDescripción");
array_push($local_temp, crear_padres_hijos_personalizados("Seguridad Pública",2,$nombres_ssp,$nombres_ssp_desc));

$nombres_cerosietedos=array();
array_push($nombres_cerosietedos, "Directora General de Inteligencia Urbana");
array_push($nombres_cerosietedos, "Director de Atención Ciudadana");
$nombres_cerosietedos_desc=array();
array_push($nombres_cerosietedos_desc, "Laura Palma Parga");
array_push($nombres_cerosietedos_desc, "José Francisco Rodríguez Lozada");
array_push($local_temp, crear_padres_hijos_personalizados("072",2,$nombres_cerosietedos,$nombres_cerosietedos_desc));

$nombres_pc=array();
array_push($nombres_pc, "Subsecretario de Coordinación de Planes \n y Programas Preventivos");
array_push($nombres_pc, "Director General de Prevención");
$nombres_pc_desc=array();
array_push($nombres_pc_desc, "Programas Preventivos");
array_push($nombres_pc_desc, "Alejandro Rivera García");
array_push($local_temp, crear_padres_hijos_personalizados("Protección Civil",2,$nombres_pc, $nombres_pc_desc));
//array_push($local_temp, crear_padres("PC"));

$nombres_labplc=array();
array_push($nombres_labplc, "Pablo Collada");
array_push($nombres_labplc, "Jose Manuel Dobarganes");
array_push($nombres_labplc, "Oscar Montiel");
$nombres_labplc_desc=array();
array_push($nombres_labplc_desc, "Pablo Collada desc");
array_push($nombres_labplc_desc, "Jose Manuel Dobarganes desc");
array_push($nombres_labplc_desc, "Oscar Montiel desc");
array_push($local_temp, crear_padres_hijos_personalizados("Labplc",3,$nombres_labplc,$nombres_labplc_desc));


$local["children"]=$local_temp;


$federal_temp=array();
$federal=crear_padres_sin_hijos("Federal");


$nombres_segob=array();
array_push($nombres_segob, "Secretario de Gobernación");
array_push($nombres_segob, "Subdirector de Divulgación y Concertación");
array_push($nombres_segob, "Subdirector De Atención a La Comisión De Política Gubernamental en Materia de Derechos Humanos");
$nombres_segob_desc=array();
array_push($nombres_segob_desc, "Conducir y poner en ejecución, en coordinación con las autoridades 
	de los gobiernos de los estados, del Distrito Federal, 
	con los gobiernos municipales, y con las dependencias 
	y entidades de la Administración Pública Federal, 
	las políticas y programas de protección civil del Ejecutivo, 
	en el marco del Sistema Nacional de Protección Civil, 
	para la prevención, auxilio, recuperación y apoyo a la población en situaciones de desastre 
	y concertar con instituciones y organismos de los sectores privado y social, 
	las acciones conducentes al mismo objetivo;");
array_push($nombres_segob_desc, "Auxiliar al Secretario en el diseño, instrumentación, ejecución y seguimiento de proyectos, planes 
y acciones para la atención oportuna de los problemas planteados por los ciudadanos y sus 
organizaciones, así como en la realización de acciones de concertación para la distensión y, en 
su caso, solución de conflictos, y establecer y conducir las acciones de coordinación con las dependencias y entidades de la 
Administración Pública Federal y de las entidades federativas y municipales para la atención 
de la problemática y conflictos de los ciudadanos y sus organizaciones.");
array_push($nombres_segob_desc, "Formular estrategias y coordinar acciones en materia de atención a víctimas u ofendidos de 
delitos con las dependencias y entidades de la Administración Pública FederalPromover la coordinación de acciones en materia de atención a víctimas, entre las dependencias 
y entidades de la Administración Pública Federal, la Procuraduría General de la República y los 
gobiernos locales para la atención a víctimas.
Proponer y, en su caso, emitir observaciones respecto de los protocolos y demás instrumentos 
jurídicos para la prevención, atención e investigación de delitos o violaciones a los derechos 
humanos");
array_push($federal_temp, crear_padres_hijos_personalizados("Secretaría de Gobernación",3,$nombres_segob,$nombres_segob_desc));

$nombres_cns=array();
array_push($nombres_cns, "Titular de CNS");
array_push($nombres_cns, "Policía Federal");
$nombres_cns_desc=array();
array_push($nombres_cns_desc, "Titular de CNS");
array_push($nombres_cns_desc, "Policía Federal");
array_push($federal_temp, crear_padres_hijos_personalizados("Comisión Nacional de Seguridad Pública",2,$nombres_cns,$nombres_cns_desc));

$federal["children"]=$federal_temp;


//añades los hijos y los nietos al gobierno
$hijos_del_gobierno=array();
array_push($hijos_del_gobierno, $federal);
array_push($hijos_del_gobierno, $local);
array_push($hijos_del_gobierno, $legislativo);

$gobierno=array();
$gobierno["name"]="Gobierno";//nombre
$gobierno["children"]=$hijos_del_gobierno;//array [];
/////////////////////

array_push($dios, $gobierno);
array_push($dios, $ciudadania);

$json_oscar["name"]="Protesta";
$json_oscar["children"]=$dios;

echo json_encode($json_oscar);
//print_r($json_oscar);	

function crear_hijos($nombre){
$hijos=array();

$aux_a=array();
$aux_a["name"]=$nombre."_A";
$aux_a["size"]=3938;

$aux_b=array();
$aux_b["name"]=$nombre."_B";
$aux_b["size"]=3938;

$aux_c=array();
$aux_c["name"]=$nombre."_C";
$aux_c["size"]=3938;

$aux_d=array();
$aux_d["name"]=$nombre."_D";
$aux_d["size"]=3938;

$aux_e=array();
$aux_e["name"]=$nombre."_E";
$aux_e["size"]=3938;

array_push($hijos, $aux_a);
array_push($hijos, $aux_b);
array_push($hijos, $aux_c);
array_push($hijos, $aux_d);
array_push($hijos, $aux_e);

return $hijos;
}

function crear_padres($nombre_padre){
$padre=array();
$padre["name"]=$nombre_padre;
$padre["children"]=crear_hijos($nombre_padre);

return $padre;

}
function crear_padres_sin_hijos($nombre_padre){
$padre=array();
$padre["name"]=$nombre_padre;
//$padre["children"]=crear_hijos($nombre_padre);

return $padre;

}

function crear_padres_hijos_personalizados($nombre_padre,$i,$nombres_hijos,$descripcion){
$padre=array();
$padre["name"]=$nombre_padre;
$padre["children"]=crear_hijos_personalizados($i,$nombres_hijos,$descripcion);

return $padre;

}

function crear_hijos_personalizados($numero,$nombres,$descripcion){
$hijos=array();
for ($i=0; $i < $numero; $i++) { 

$aux_a=array();
$aux_a["name"]=$nombres[$i];
$aux_a["description"]=$descripcion[$i];
$aux_a["size"]=3938;
array_push($hijos, $aux_a);

}


return $hijos;
}

?>
