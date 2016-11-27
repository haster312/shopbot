<?php
use \Illuminate\Database\Eloquent\Model;
use GigaAI\Storage\Storage;

class DataBot extends Model {
    public $table = "bot_data";
    public $timestamps = false;
    private $connection;
    protected $fillable = [
        'lead_id', 'key', 'value'
    ];

    function __construct(array $attributes)
    {
        $this->connection = new Storage();
        parent::__construct($attributes);
    }

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