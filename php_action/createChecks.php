<?php


require_once 'core.php';

//$PREPASUELO = $_POST['PREPASUELO'];
//$PREPASEMILLA = $_POST['PREPASEMILLA'];
//$S//IEMBRA = $_POST['SIEMBRA'];
//$RESIEMBRA = $_POST['RESIEMBRA'];
//$DESHIERBE = $_POST['DESHIERBE'];
//$APOQUE = $_POST['APOQUE'];
//$LIMPIDESOJE = $_POST['LIMPIDESOJE'];
//$ELAABONOSO = $_POST['ELAABONOSO'];
// $ELAABONOLI = $_POST['ELAABONOLI'];
// $APLIABONO = $_POST['APLIABONO'];
// $CONTROLPLAGA = $_POST['CONTROLPLAGA'];
// $CONTROLENFER = $_POST['CONTROLENFER'];
// $MANTEFINCA = $_POST['MANTEFINCA'];
// $COSECHA = $_POST['COSECHA'];
// $ACARREOTRANS = $_POST['ACARREOTRANS'];
// $DESCARGA = $_POST['DESCARGA'];
// $CALIMANTEEQUIPO = $_POST['CALIMANTEEQUIPO'];
// $MOLIENDA = $_POST['MOLIENDA'];
// $FILTRADO = $_POST['FILTRADO'];
// $MELADA = $_POST['MELADA'];
// $CLARIFICADO = $_POST['CLARIFICADO'];
// $PUNTERO = $_POST['PUNTERO'];
// $BATIDO = $_POST['BATIDO'];
// $TAMIZADO = $_POST['TAMIZADO'];
// $EMPACADO = $_POST['EMPACADO'];
// $CODIFICADO = $_POST['CODIFICADO'];
// $LIMPIEZAMOD = $_POST['LIMPIEZAMOD'];
// $DESINFECCIONMOD = $_POST['DESINFECCIONMOD'];
// $REGISTROVEN = $_POST['REGISTROVEN'];
// $LLENADOCONTA = $_POST['LLENADOCONTA'];
// $CAPACITACION = $_POST['CAPACITACION'];
// $COMERCIALIZACION = $_POST['COMERCIALIZACION'];
//$FECHADG = $_POST['FECHADG'];
$NUMTRADG = $_POST['NUMTRADG'];
$IDHOJA = $_POST['idhoja'];
$FECHADG = date('Y-m-d', strtotime($_POST['FECHADG']));


if (isset($_POST['PREPASUELO'])) {
    $PREPASUELO = $_POST['PREPASUELO'];
} else {
    $PREPASUELO = 0;
}
if (isset($_POST['PREPASEMILLA'])) {
    $PREPASEMILLA = $_POST['PREPASEMILLA'];
} else {
    $PREPASEMILLA = 0;
}
if (isset($_POST['SIEMBRA'])) {
    $SIEMBRA = $_POST['SIEMBRA'];
} else {
    $SIEMBRA = 0;
}
if (isset($_POST['RESIEMBRA'])) {
    $RESIEMBRA = $_POST['RESIEMBRA'];
} else {
    $RESIEMBRA = 0;
}
if (isset($_POST['DESHIERBE'])) {
    $DESHIERBE = $_POST['DESHIERBE'];
} else {
    $DESHIERBE = 0;
}

if (isset($_POST['APOQUE'])) {
    $APOQUE = $_POST['APOQUE'];
} else {
    $APOQUE = 0;
}
if (isset($_POST['LIMPIDESOJE'])) {
    $LIMPIDESOJE = $_POST['LIMPIDESOJE'];
} else {
    $LIMPIDESOJE = 0;
}
if (isset($_POST['ELAABONOSO'])) {
    $ELAABONOSO = $_POST['ELAABONOSO'];
} else {
    $ELAABONOSO = 0;
}
if (isset($_POST['ELAABONOLI'])) {
    $ELAABONOLI = $_POST['ELAABONOLI'];
} else {
    $ELAABONOLI = 0;
}

if (isset($_POST['APLIABONO'])) {
    $APLIABONO = $_POST['APLIABONO'];
} else {
    $APLIABONO = 0;
}

if (isset($_POST['CONTROLPLAGA'])) {
    $CONTROLPLAGA = $_POST['CONTROLPLAGA'];
} else {
    $CONTROLPLAGA = 0;
}

if (isset($_POST['CONTROLENFER'])) {
    $CONTROLENFER = $_POST['CONTROLENFER'];
} else {
    $CONTROLENFER = 0;
}

if (isset($_POST['MANTEFINCA'])) {
    $MANTEFINCA = $_POST['MANTEFINCA'];
} else {
    $MANTEFINCA = 0;
}

if (isset($_POST['COSECHA'])) {
    $COSECHA = $_POST['COSECHA'];
} else {
    $COSECHA = 0;
}

if (isset($_POST['ACARREOTRANS'])) {
    $ACARREOTRANS = $_POST['ACARREOTRANS'];
} else {
    $ACARREOTRANS = 0;
}

if (isset($_POST['DESCARGA'])) {
    $DESCARGA = $_POST['DESCARGA'];
} else {
    $DESCARGA = 0;
}

if (isset($_POST['CALIMANTEEQUIPO'])) {
    $CALIMANTEEQUIPO = $_POST['CALIMANTEEQUIPO'];
} else {
    $CALIMANTEEQUIPO = 0;
}

if (isset($_POST['MOLIENDA'])) {
    $MOLIENDA = $_POST['MOLIENDA'];
} else {
    $MOLIENDA = 0;
}

if (isset($_POST['FILTRADO'])) {
    $FILTRADO = $_POST['FILTRADO'];
} else {
    $FILTRADO = 0;
}

if (isset($_POST['MELADA'])) {
    $MELADA = $_POST['MELADA'];
} else {
    $MELADA = 0;
}

if (isset($_POST['CLARIFICADO'])) {
    $CLARIFICADO = $_POST['CLARIFICADO'];
} else {
    $CLARIFICADO = 0;
}

if (isset($_POST['PUNTERO'])) {
    $PUNTERO = $_POST['PUNTERO'];
} else {
    $PUNTERO = 0;
}

if (isset($_POST['BATIDO'])) {
    $BATIDO = $_POST['BATIDO'];
} else {
    $BATIDO = 0;
}

if (isset($_POST['TAMIZADO'])) {
    $TAMIZADO = $_POST['TAMIZADO'];
} else {
    $TAMIZADO = 0;
}

if (isset($_POST['EMPACADO'])) {
    $EMPACADO = $_POST['EMPACADO'];
} else {
    $EMPACADO = 0;
}

if (isset($_POST['CODIFICADO'])) {
    $CODIFICADO = $_POST['CODIFICADO'];
} else {
    $CODIFICADO = 0;
}

if (isset($_POST['LIMPIEZAMOD'])) {
    $LIMPIEZAMOD = $_POST['LIMPIEZAMOD'];
} else {
    $LIMPIEZAMOD = 0;
}

if (isset($_POST['DESINFECCIONMOD'])) {
    $DESINFECCIONMOD = $_POST['DESINFECCIONMOD'];
} else {
    $DESINFECCIONMOD = 0;
}

if (isset($_POST['REGISTROVEN'])) {
    $REGISTROVEN = $_POST['REGISTROVEN'];
} else {
    $REGISTROVEN = 0;
}

if (isset($_POST['LLENADOCONTA'])) {
    $LLENADOCONTA = $_POST['LLENADOCONTA'];
} else {
    $LLENADOCONTA = 0;
}

if (isset($_POST['CAPACITACION'])) {
    $CAPACITACION = $_POST['CAPACITACION'];
} else {
    $CAPACITACION = 0;
}

if (isset($_POST['COMERCIALIZACION'])) {
    $COMERCIALIZACION = $_POST['COMERCIALIZACION'];
} else {
    $COMERCIALIZACION = 0;
}


$sql = "INSERT INTO 
HOJADECAMPO (
    SUBHOJADECAMPOID, 
    PREPASUELO,
    PREPASEMILLA,
    SIEMBRA,
    RESIEMBRA,
    DESHIERBE,
    APOQUE,
    LIMPIDESOJE,
    ELAABONOSO,
    ELAABONOLI,
    APLIABONO,
    CONTROLPLAGA,
    CONTROLENFER,
    MANTEFINCA,
    COSECHA,
    ACARREOTRANS,
    DESCARGA,
    CALIMANTEEQUIPO,
    MOLIENDA,
    FILTRADO,
    MELADA,
    CLARIFICADO,
    PUNTERO,
    BATIDO,
    TAMIZADO,
    EMPACADO,
    CODIFICADO,
    LIMPIEZAMOD,
    DESINFECCIONMOD,
    REGISTROVEN,
    LLENADOCONTA,
    CAPACITACION,
    COMERCIALIZACION,
    FECHADG,
    NUMTRADG
    ) VALUES (
$IDHOJA,      
$PREPASUELO,
$PREPASEMILLA,
$SIEMBRA,
$RESIEMBRA,
$DESHIERBE,
$APOQUE,
$LIMPIDESOJE,
$ELAABONOSO,
$ELAABONOLI,
$APLIABONO,
$CONTROLPLAGA,
$CONTROLENFER,
$MANTEFINCA ,
$COSECHA,
$ACARREOTRANS,
$DESCARGA,
$CALIMANTEEQUIPO,
$MOLIENDA,
$FILTRADO,
$MELADA,
$CLARIFICADO,
$PUNTERO,
$BATIDO,
$TAMIZADO,
$EMPACADO,
$CODIFICADO,
$LIMPIEZAMOD ,
$DESINFECCIONMOD,
$REGISTROVEN,
$LLENADOCONTA,
$CAPACITACION,
$COMERCIALIZACION,
'$FECHADG',
$NUMTRADG)";

$EJECUTADO = mysqli_query($connect, $sql) or die("Problemas al insertar HOJA DE CAMPO " . mysqli_error($connect));



header("location:../hojaCampo.php");
