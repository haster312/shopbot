<?php
use \Illuminate\Database\Eloquent\Model;

class DataBot extends Model {

    public $table = "bot_data";
    public $timestamps = false;
    protected $fillable = [
        'lead_id', 'key', 'value'
    ];

    public static function setData($leadId, $key, $object){
        $instance = new static;
        $instance->lead_id  = $leadId;
        $instance->key      = $key;
        $instance->object   = serialize($object);
        $instance->save();
    }

    public static function getData($leadId, $key){
        $instance = new static;
        $data = $instance->where('lead_id', $leadId)->andWhere('key', $key)->first();
        if($data)
            return unserialize($data);
        return null;
    }
}