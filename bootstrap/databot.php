<?php
use \Illuminate\Database\Eloquent\Model;

class DataBot extends Model {
    protected $connection = 'mysql';
    public $table = "bot_data";
    public $timestamps = false;
    protected $fillable = [
        'lead_id', 'key', 'value'
    ];

    public static function setData($leadId, $key, $object){
        $instance = new DataBot();
        $instance->lead_id  = $leadId;
        $instance->key      = $key;
        $instance->object   = serialize($object);
        $instance->save();
    }

    public static function getData($leadId, $key){
        $data = DataBot::where('lead_id', $leadId)->where('key', $key)->first();
        if($data)
            return unserialize($data);
        return null;
    }
}