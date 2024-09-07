<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = "game";
    protected $primaryKey = "id";
    public $incrementing = false;
    protected $keyType = "string";

    public static function extract_id(string $input): string
    {
        $regex =
            "|(?:" .
            preg_quote("https://") .
            ")?" .
            preg_quote("store.steampowered.com/app/") .
            "(?P<id>\w+)[\w/\?\d=]*" .
            "|";
        // dd($regex);
        preg_match($regex, $input, $matches, PREG_UNMATCHED_AS_NULL);
        return $matches["id"] ?? $input;
    }
}
