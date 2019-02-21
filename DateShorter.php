<?php 
/**
 * @author Mehmet Ali KUŞ
 * @web http://mehmetalikus.parsnova.net
 * @mail mehmetali.kus@hotmail.com
 * @date 21 February 2019
*/
class DateShorter
{
    private static $indexs = [
        '01',
        '02',
        '03',
        '04',
        '05',
        '06',
        '07',
        '08',
        '09',
        '10',
        '11',
        '12'
    ];
    
    private static $names = [
        "Oca",
        "Sub",
        "Mar",
        "Nis",
        "May",
        "Haz",
        "Tem",
        "Agu",
        "Eyl",
        "Eki",
        "Kas",
        "Ara"
    ];

    public static function set(Array $param): Void
    {   
        self::$names = $param;   
    }

    public static function output(String $dateTime, Array $param = Null): String
    {
        if($param != NULL && is_array($param)){
            self::set($lang);
        }        
        $date = explode(" " , $dateTime);
        $date = explode("-", $date[0]);
        return $date[2] . " " . $c = str_replace(self::$indexs, self::$names, $date[1]);
    }
}
