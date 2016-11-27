<?php
use \Illuminate\Database\Eloquent\Model;
use GigaAI\Storage\Storage;

class DataBot extends Model {
    public $table = "bot_data";
    public $timestamps = false;
    public $bot;
    protected $fillable = [
        'lead_id', 'key', 'value'
    ];

    function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
        $this->bot = require __DIR__ . '/../bootstrap/bot.php';
    }

    public static function setData($leadId, $key, $value){
        $instance = new DataBot();
        $instance->lead_id  = $leadId;
        $instance->key      = $key;
        $instance->value   = serialize($value);
        $instance->save();
    }

    public static function getData($leadId, $key){
        new static;
        $data = DataBot::where('lead_id', $leadId)->where('key', $key)->first();
        if($data)
            return unserialize($data);
        return null;
    }
}