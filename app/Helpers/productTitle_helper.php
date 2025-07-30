<?php 

    function productTitle ($id) { 

        if($id === 'STEP for Working Professionals') {
            
            return '<h1>Working Professionals</h1>';
        }

        if($id === 'STEP for Competitive Exams') {
            return '<h1>Competitive Exams</h1>';
        }

        if($id === 'STEP eLearn') {
            return '<h1>General 
Communication</h1>';
        }

        if($id === 'STEP for IELTS') {
            return '<h1>IELTS</h1>';
        }

        if($id === 'STEP Live Junior - 2025') {
            return '<h1>Kids</h1>';
        }

       return '<h1>'.$id.'</h1>';
    }

    /**
     * Describes foreign characters for transliteration with the text helper.
     */
    class ForeignCharacters {
        /**
         * Without further ado, the list of foreign characters.
         */
        public $characterList = [
            '/ä|æ|ǽ/'                                                     => '',
            '/ö|œ/'                                                       => '',
            '/ü/'                                                         => '',
            '/Ä/'                                                         => '',
            '/Ü/'                                                         => '',
            '/Ö/'                                                         => '',
            '/À|Á|Â|Ã|Ä|Å|Ǻ|Ā|Ă|Ą|Ǎ|Α|Ά|Ả|Ạ|Ầ|Ẫ|Ẩ|Ậ|Ằ|Ắ|Ẵ|Ẳ|Ặ|А/'         => '',
            '/à|á|â|ã|å|ǻ|ā|ă|ą|ǎ|ª|α|ά|ả|ạ|ầ|ấ|ẫ|ẩ|ậ|ằ|ắ|ẵ|ẳ|ặ|а/'       => '',
            '/Б/'                                                         => '',
            '/б/'                                                         => '',
            '/Ç|Ć|Ĉ|Ċ|Č/'                                                 => '',
            '/ç|ć|ĉ|ċ|č/'                                                 => '',
            '/Д/'                                                         => '',
            '/д/'                                                         => '',
            '/Ð|Ď|Đ|Δ/'                                                   => '',
            '/ð|ď|đ|δ/'                                                   => '',
            '/È|É|Ê|Ë|Ē|Ĕ|Ė|Ę|Ě|Ε|Έ|Ẽ|Ẻ|Ẹ|Ề|Ế|Ễ|Ể|Ệ|Е|Э/'                 => '',
            '/è|é|ê|ë|ē|ĕ|ė|ę|ě|έ|ε|ẽ|ẻ|ẹ|ề|ế|ễ|ể|ệ|е|э/'                 => '',
            '/Ф/'                                                         => '',
            '/ф/'                                                         => '',
            '/Ĝ|Ğ|Ġ|Ģ|Γ|Г|Ґ/'                                             => '',
            '/ĝ|ğ|ġ|ģ|γ|г|ґ/'                                             => '',
            '/Ĥ|Ħ/'                                                       => '',
            '/ĥ|ħ/'                                                       => '',
            '/Ì|Í|Î|Ï|Ĩ|Ī|Ĭ|Ǐ|Į|İ|Η|Ή|Ί|Ι|Ϊ|Ỉ|Ị|И|Ы/'                     => '',
            '/ì|í|î|ï|ĩ|ī|ĭ|ǐ|į|ı|η|ή|ί|ι|ϊ|ỉ|ị|и|ы|ї/'                   => '',
            '/Ĵ/'                                                         => '',
            '/ĵ/'                                                         => '',
            '/Ķ|Κ|К/'                                                     => '',
            '/ķ|κ|к/'                                                     => '',
            '/Ĺ|Ļ|Ľ|Ŀ|Ł|Λ|Л/'                                             => '',
            '/ĺ|ļ|ľ|ŀ|ł|λ|л/'                                             => '',
            '/М/'                                                         => '',
            '/м/'                                                         => '',
            '/Ñ|Ń|Ņ|Ň|Ν|Н/'                                               => '',
            '/ñ|ń|ņ|ň|ŉ|ν|н/'                                             => '',
            '/Ò|Ó|Ô|Õ|Ō|Ŏ|Ǒ|Ő|Ơ|Ø|Ǿ|Ο|Ό|Ω|Ώ|Ỏ|Ọ|Ồ|Ố|Ỗ|Ổ|Ộ|Ờ|Ớ|Ỡ|Ở|Ợ|О/'   => '',
            '/ò|ó|ô|õ|ō|ŏ|ǒ|ő|ơ|ø|ǿ|º|ο|ό|ω|ώ|ỏ|ọ|ồ|ố|ỗ|ổ|ộ|ờ|ớ|ỡ|ở|ợ|о/' => '',
            '/П/'                                                         => '',
            '/п/'                                                         => '',
            '/Ŕ|Ŗ|Ř|Ρ|Р/'                                                 => '',
            '/ŕ|ŗ|ř|ρ|р/'                                                 => '',
            '/Ś|Ŝ|Ş|Ș|Š|Σ|С/'                                             => '',
            '/ś|ŝ|ş|ș|š|ſ|σ|ς|с/'                                         => '',
            '/Ț|Ţ|Ť|Ŧ|τ|Т/'                                               => '',
            '/ț|ţ|ť|ŧ|т/'                                                 => '',
            '/Ù|Ú|Û|Ũ|Ū|Ŭ|Ů|Ű|Ų|Ư|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ|Ũ|Ủ|Ụ|Ừ|Ứ|Ữ|Ử|Ự|У/'           => '',
            '/ù|ú|û|ũ|ū|ŭ|ů|ű|ų|ư|ǔ|ǖ|ǘ|ǚ|ǜ|υ|ύ|ϋ|ủ|ụ|ừ|ứ|ữ|ử|ự|у/'       => '',
            '/Ƴ|Ɏ|Ỵ|Ẏ|Ӳ|Ӯ|Ў|Ý|Ÿ|Ŷ|Υ|Ύ|Ϋ|Ỳ|Ỹ|Ỷ|Ỵ|Й/'                       => '',
            '/ẙ|ʏ|ƴ|ɏ|ỵ|ẏ|ӳ|ӯ|ў|ý|ÿ|ŷ|ỳ|ỹ|ỷ|ỵ|й/'                         => '',
            '/В/'                                                         => '',
            '/в/'                                                         => '',
            '/Ŵ/'                                                         => '',
            '/ŵ/'                                                         => '',
            '/Ź|Ż|Ž|Ζ|З/'                                                 => '',
            '/ź|ż|ž|ζ|з/'                                                 => '',
            '/Æ|Ǽ/'                                                       => '',
            '/ß/'                                                         => '',
            '/Ĳ/'                                                         => '',
            '/ĳ/'                                                         => '',
            '/Œ/'                                                         => '',
            '/ƒ/'                                                         => '',
            '/ξ/'                                                         => '',
            '/π/'                                                         => '',
            '/β/'                                                         => '',
            '/μ/'                                                         => '',
            '/ψ/'                                                         => '',
            '/Ё/'                                                         => '',
            '/ё/'                                                         => '',
            '/Є/'                                                         => '',
            '/є/'                                                         => '',
            '/Ї/'                                                         => '',
            '/Ж/'                                                         => '',
            '/ж/'                                                         => '',
            '/Х/'                                                         => '',
            '/х/'                                                         => '',
            '/Ц/'                                                         => '',
            '/ц/'                                                         => '',
            '/Ч/'                                                         => '',
            '/ч/'                                                         => '',
            '/Ш/'                                                         => '',
            '/ш/'                                                         => '',
            '/Щ/'                                                         => '',
            '/щ/'                                                         => '',
            '/Ъ|ъ|Ь|ь/'                                                   => '',
            '/Ю/'                                                         => '',
            '/ю/'                                                         => '',
            '/Я/'                                                         => '',
            '/я/'                                                         => '',
        ];
    }

    if (! function_exists('convert_accented_characters')) {
        /**
         * Convert Accented Foreign Characters to ASCII
         *
         * @param string $str Input string
         */
        function convert_accented_characters(string $str): string
        {
            static $arrayFrom, $arrayTo;
    
            if (! is_array($arrayFrom)) {
                $config = new ForeignCharacters();
    
                if (empty($config->characterList) || ! is_array($config->characterList)) {
                    $arrayFrom = [];
                    $arrayTo   = [];
    
                    return $str;
                }
                $arrayFrom = array_keys($config->characterList);
                $arrayTo   = array_values($config->characterList);
    
                unset($config);
            }
    
            return preg_replace($arrayFrom, $arrayTo, $str);
        }
    }

?>