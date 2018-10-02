<?phpnamespace App;use Carbon\Carbon;use Illuminate\Database\Eloquent\Model;class Post extends Model{    protected $fillable = [        'title', 'path', 'description', 'content', 'image', 'sub_image', 'is_active', 'post_type', 'user_id', 'seo_id', 'category_item_id'    ];    public function users()    {        return $this->belongsTo('App\User', 'user_id');    }    public function categoryitems()    {        return $this->belongsToMany('App\CategoryItem', 'category_many', 'item_id', 'category_id')->withTimestamps();    }    public function seos()    {        return $this->belongsTo('App\Seo', 'seo_id');    }    public function setImageAttribute($value)    {        if ($value) {            $this->attributes['image'] = substr($value, strpos($value, 'images'), strlen($value) - 1);        } else            $this->attributes['image'] = null;    }    public function getCreatedAtAttribute($date)    {        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');    }    public function prepareParameters($parameters)    {        if (!$parameters->input('is_active')) {            $parameters->request->add(['is_active' => null]);        }        if ($parameters->input('image-choose')) {            $listImage = $parameters->input('image-choose');            $subImage = '';            if (count($listImage) != 0) {                foreach ($listImage as $key => $item) {                    if(hasHttpOrHttps($item))                        $subImage = $subImage . substr($item, strpos($item, 'images'), strlen($item) - 1) . ';';                    else{                        $subImage=$subImage.$item.';';                    }                }                $parameters->request->add(['sub_image' => substr($subImage, 0, -1)]);            }        }        else{            $parameters->request->add(['sub_image' => null]);        }        return $parameters;    }    public function setIsActiveAttribute($value)    {        if (!IsNullOrEmptyString($value)) {            $this->attributes['is_active'] = 1;        } else {            $this->attributes['is_active'] = 0;        }    }    public function setDescriptionAttribute($value)    {        if (!IsNullOrEmptyString($value)) {            $this->attributes['description'] = $value;        } else {            $this->attributes['description'] = null;        }    }    public function setPathAttribute($value)    {        if (IsNullOrEmptyString($value))            $this->attributes['path'] = chuyen_chuoi_thanh_path($this->title);    }    protected static function boot()    {        parent::boot();        static::deleting(function ($post) { // before delete() method call this            $post->seos->delete();            $post->categoryitems()->detach();        });    }}