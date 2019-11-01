<?php
namespace app\models;
use yii\behaviors\OptimisticLockBehavior;

class OptimistickModel extends \yii\db\ActiveRecord {
//	public function behaviors()
//    {
//		return [
//			OptimisticLockBehavior::className(),
//		];
//	}
	
	public function optimisticLock()
    {
        return 'version';
    }
}