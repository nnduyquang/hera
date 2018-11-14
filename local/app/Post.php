<?phpnamespace App;use Carbon\Carbon;use Illuminate\Database\Eloquent\Model;use Illuminate\Support\Facades\Auth;class Post extends Model{    protected $fillable = [        'title', 'path', 'description', 'content', 'image','image_small', 'sub_image','videos', 'is_active', 'post_type', 'user_id', 'seo_id', 'category_item_id'    ];    public function users()    {        return $this->belongsTo('App\User', 'user_id');    }    public function categoryitems()    {        return $this->belongsToMany('App\CategoryItem', 'category_many', 'item_id', 'category_id')->withTimestamps();    }    public function seos()    {        return $this->belongsTo('App\Seo', 'seo_id');    }    public function setImageAttribute($value)    {        if ($value) {            $this->attributes['image'] = substr($value, strpos($value, 'images'), strlen($value) - 1);        } else            $this->attributes['image'] = null;    }    public function setImageSmallAttribute($value)    {        if ($value) {            $this->attributes['image_small'] = substr($value, strpos($value, 'images'), strlen($value) - 1);        } else            $this->attributes['image_small'] = null;    }    public function getCreatedAtAttribute($date)    {        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');    }    public function getPostByPathAndType($path,$postType){        return $this->wherePath($path)->where('post_type',$postType)->first();    }    public function prepareParameters($parameters)    {        $parameters->request->add(['path' => '']);        $parameters->request->add(['user_id' => Auth::user()->id]);        if (!$parameters->input('is_active')) {            $parameters->request->add(['is_active' => null]);        }        if ($parameters->input('image-choose')) {            $listImage = $parameters->input('image-choose');            $subImage = '';            if (count($listImage) != 0) {                foreach ($listImage as $key => $item) {                    if(hasHttpOrHttps($item))                        $subImage = $subImage . substr($item, strpos($item, 'images'), strlen($item) - 1) . ';';                    else{                        $subImage=$subImage.$item.';';                    }                }                $parameters->request->add(['sub_image' => substr($subImage, 0, -1)]);            }        }        else{            $parameters->request->add(['sub_image' => null]);        }        if (isset($parameters['video-choose'])) {            $listVideo = $parameters->input('video-choose');            $subVideo = '';            if (count($listVideo) != 0) {                foreach ($listVideo as $key => $item) {                    if (!is_null($item))                        $item=chuyen_chuoi_embed_youtube($item);                        $subVideo = $subVideo . $item . ';';                }            }            if (empty($subVideo)) {                $parameters->request->add(['videos' => null]);            } else {                $parameters->request->add(['videos' => substr($subVideo, 0, -1)]);            }        }        if (isset($parameters['radio-uudai'])) {            if ($parameters['radio-uudai'] == 2) {                if (!$parameters['sub_image'])                    $parameters->request->add(['sub_image' => null]);                else                    $parameters['sub_image'] = null;            } else {                if (!$parameters['videos'])                    $parameters->request->add(['videos' => null]);                else {                    $parameters['videos'] = null;                }            }        }        return $parameters;    }    public function setIsActiveAttribute($value)    {        if (!IsNullOrEmptyString($value)) {            $this->attributes['is_active'] = 1;        } else {            $this->attributes['is_active'] = 0;        }    }    public function setDescriptionAttribute($value)    {        if (!IsNullOrEmptyString($value)) {            $this->attributes['description'] = $value;        } else {            $this->attributes['description'] = null;        }    }    public function setPathAttribute($value)    {        if (IsNullOrEmptyString($value))            $this->attributes['path'] = chuyen_chuoi_thanh_path($this->title);    }    protected static function boot()    {        parent::boot();        static::deleting(function ($post) { // before delete() method call this            $post->seos->delete();            $post->categoryitems()->detach();        });    }}