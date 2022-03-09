<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mobil".
 *
 * @property int $id_mobil
 * @property string $nopol
 * @property string $nama_mobil
 * @property string $jenis_mobil
 * @property string $tahun_pembuatan
 * @property int $harga_sewa
 * @property int $kapasitas_penumpang
 * @property string $status_mobil
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property DetailFasilitas[] $detailFasilitas
 * @property DetailSewa $detailSewa
 */
class Mobil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mobil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nopol', 'nama_mobil', 'jenis_mobil', 'tahun_pembuatan', 'harga_sewa', 'kapasitas_penumpang', 'status_mobil'], 'required', 'message' => '{attribute} Tidak Boleh kosong.'],
            [['harga_sewa', 'kapasitas_penumpang'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nopol'], 'string', 'max' => 15],
            [['nama_mobil'], 'string', 'max' => 25],
            [['jenis_mobil'], 'string', 'max' => 20],
            [['tahun_pembuatan'], 'string', 'max' => 5],
            [['status_mobil'], 'string', 'max' => 8],
            [['nopol'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mobil' => 'Id Mobil',
            'nopol' => 'No Polisi',
            'nama_mobil' => 'Nama Mobil',
            'jenis_mobil' => 'Jenis Mobil',
            'tahun_pembuatan' => 'Tahun Pembuatan',
            'harga_sewa' => 'Harga Sewa',
            'kapasitas_penumpang' => 'Kapasitas Penumpang',
            'status_mobil' => 'Status Mobil',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[DetailFasilitas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailFasilitas()
    {
        return $this->hasMany(DetailFasilitas::className(), ['no_mobil' => 'id_mobil']);
    }

    /**
     * Gets query for [[DetailSewa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailSewa()
    {
        return $this->hasOne(DetailSewa::className(), ['no_mobil' => 'id_mobil']);
    }
}
