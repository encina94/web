<?php

namespace app\models\Usuario;

use yii;
use yii\base\Model;
use app\models\CapaServicio\CalificacionesModelo;
use yii\helpers\ArrayHelper;
use yii\data\ArrayDataProvider;

class ListaHistorialCalificacionesUsuarioModel extends Model {
    //GetInfoCalificacion($CalificacionID, $ViajeID,$Quien, $ParaQuien,$Puntaje, $AgenciaID)
    public $dataProvider;
    public $PersonaID;

    public function setDataProvider() {
        $this->PersonaID = Yii::$app->user->identity->PersonaID;
        $obj = new CalificacionesModelo();
        $this->dataProvider = new ArrayDataProvider([
        'allModels' => $obj->GetInfoCalificacion(null, null, $this->PersonaID, null, null, null)
        ]);

        return true;
    }

}
