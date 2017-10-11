<?php declare(strict_types=1);
namespace Phantasy\PHP;

function curry(callable $f)
{
    $ref = new \ReflectionFunction($f);
    $numParams = $ref->getNumberOfRequiredParameters();
    $recurseFunc = function (...$args) use ($f, $numParams, &$recurseFunc) {
        if (\count($args) >= $numParams) {
            return call_user_func_array($f, $args);
        } else {
            return function (...$args2) use ($args, &$recurseFunc) {
                return $recurseFunc(...array_merge($args, $args2));
            };
        }
    };
    return $recurseFunc;
}

function compose(callable ...$fns)
{
    return \array_reduce(
        $fns,
        function (callable $f, callable $g) : callable {
            return function ($x) use ($f, $g) {
                return $f($g($x));
            };
        },
        function ($x) {
            return $x;
        }
    );
}

function explode(...$args)
{
    return curry('\explode')(...$args);
}

function explode3(...$args)
{
    return curry(function (int $limit, string $delimiter, string $str) : array {
        return \explode($delimiter, $str, $limit);
    })(...$args);
}

function implode(...$args)
{
    return curry('\implode')(...$args);
}

function implode1(...$args)
{
    return curry(function (array $pieces) : string {
        return \implode($pieces);
    })(...$args);
}

function addcslashes(...$args)
{
    return curry(function (string $charlist, string $str) : string {
        return \addcslashes($str, $charlist);
    })(...$args);
}

function addslashes(...$args)
{
    return curry('\addslashes')(...$args);
}

function bin2hex(...$args)
{
    return curry('\bin2hex')(...$args);
}

function chop(...$args)
{
    return curry('\chop')(...$args);
}

function chop2(...$args)
{
    return curry(function (string $charMask, string $str) : string {
        return \chop($str, $charMask);
    })(...$args);
}

function chr(...$args)
{
    return curry('\chr')(...$args);
}

function chunk_split(...$args)
{
    return curry('\chunk_split')(...$args);
}

function chunk_split2(...$args)
{
    return curry(function (int $chunklen, string $body) : string {
        return \chunk_split($body, $chunklen);
    })(...$args);
}

function chunk_split3(...$args)
{
    return curry(function (string $end, int $chunklen, string $body) : string {
        return \chunk_split($body, $chunklen, $end);
    })(...$args);
}

function convert_cyr_string(...$args)
{
    return curry(function (string $from, string $to, string $str) : string {
        return \convert_cyr_string($str, $from, $to);
    })(...$args);
}

function convert_uudecode(...$args)
{
    return curry('\convert_uudecode')(...$args);
}

function convert_uuencode(...$args)
{
    return curry('\convert_uuencode')(...$args);
}

function count_chars(...$args)
{
    return curry('\count_chars')(...$args);
}

function count_chars2(...$args)
{
    return curry(function (int $mode, string $string) {
        return \count_chars($string, $mode);
    })(...$args);
}

function crc32(...$args)
{
    return curry('\crc32')(...$args);
}

function crypt(...$args)
{
    return curry(function (string $salt, string $str) : string {
        return \crypt($str, $salt);
    })(...$args);
}

function hex2bin(...$args)
{
    return curry('\hex2bin')(...$args);
}

function html_entity_decode(...$args)
{
    return curry('\html_entity_decode')(...$args);
}

function html_entity_decode2(...$args)
{
    return curry(function (int $flags, string $string) : string {
        return \html_entity_decode($string, $flags);
    })(...$args);
}

function html_entity_decode3(...$args)
{
    return curry(function (string $encoding, int $flags, string $string) : string {
        return \html_entity_decode($string, $flags, $encoding);
    })(...$args);
}

function htmlentities(...$args)
{
    return curry('\htmlentities')(...$args);
}

function htmlentities2(...$args)
{
    return curry(function (int $flags, string $string) : string {
        return \htmlentities($string, $flags);
    })(...$args);
}

function htmlentities3(...$args)
{
    return curry(function (string $encoding, int $flags, string $string) : string {
        return \htmlentities($string, $flags, $encoding);
    })(...$args);
}

function htmlentities4(...$args)
{
    return curry(function (bool $double_encode, string $encoding, int $flags, string $string) : string {
        return \htmlentities($string, $flags, $encoding, $double_encode);
    })(...$args);
}

function htmlspecialchars_decode(...$args)
{
    return curry('\htmlspecialchars_decode')(...$args);
}

function htmlspecialchars_decode2(...$args)
{
    return curry(function (int $flags, string $str) : string {
        return \htmlspecialchars_decode($str, $flags);
    })(...$args);
}

function htmlspecialchars(...$args)
{
    return curry('\htmlspecialchars')(...$args);
}

function htmlspecialchars2(...$args)
{
    return curry(function (int $flags, string $string) : string {
        return \htmlspecialchars($string, $flags);
    })(...$args);
}

function htmlspecialchars3(...$args)
{
    return curry(function (string $encoding, int $flags, string $string) : string {
        return \htmlspecialchars($string, $flags, $encoding);
    })(...$args);
}

function htmlspecialchars4(...$args)
{
    return curry(function (bool $double_encode, string $encoding, int $flags, string $string) : string {
        return \htmlspecialchars($string, $flags, $encoding, $double_encode);
    })(...$args);
}

function join(...$args)
{
    return curry('\join')(...$args);
}

function lcfirst(...$args)
{
    return curry('\lcfirst')(...$args);
}

function levenshtein(...$args)
{
    return curry('\levenshtein')(...$args);
}

function levenshtein5(...$args)
{
    return curry(function (int $cost_ins, int $cost_rep, int $cost_del, string $str1, string $str2) : int {
        return \levenshtein($str1, $str2, $cost_ins, $cost_rep, $cost_del);
    })(...$args);
}

function ltrim(...$args)
{
    return curry('\ltrim')(...$args);
}

function ltrim2(...$args)
{
    return curry(function (string $charMask, string $str) : string {
        return \ltrim($str, $charMask);
    })(...$args);
}

function md5_file(...$args)
{
    return curry('\md5_file')(...$args);
}

function md5_file2(...$args)
{
    return curry(function (bool $rawOutput, string $filename) : string {
        return \md5_file($filename, $rawOutput);
    })(...$args);
}

function md5(...$args)
{
    return curry('\md5')(...$args);
}

function md52(...$args)
{
    return curry(function (bool $rawOutput, string $str) : string {
        return \md5($str, $rawOutput);
    })(...$args);
}

function metaphone(...$args)
{
    return curry('\metaphone')(...$args);
}

function metaphone2(...$args)
{
    return curry(function (int $phonemes, string $str) : string {
        return \metaphone($str, $phonemes);
    })(...$args);
}

function money_format(...$args)
{
    return curry('\money_format')(...$args);
}

function nl_langinfo(...$args)
{
    return curry('\nl_langinfo')(...$args);
}

function nl2br(...$args)
{
    return curry('\nl2br')(...$args);
}

function nl2br2(...$args)
{
    return curry(function (bool $isXHTML, string $str) : string {
        return \nl2br($str, $isXHTML);
    })(...$args);
}

function number_format(...$args)
{
    return curry('\number_format')(...$args);
}

function number_format2(...$args)
{
    return curry(function ($decimals, $num) {
        return \number_format($num, $decimals);
    })(...$args);
}

function number_format4(...$args)
{
    return curry(function (int $decimals, string $decPoint, string $thousandsSep, float $num) : string {
        return \number_format($num, $decimals, $decPoint, $thousandsSep);
    })(...$args);
}

function ord(...$args)
{
    return curry('\ord')(...$args);
}

function parse_str(...$args)
{
    return curry(function (string $str) : array {
        \parse_str($str, $output);
        return $output;
    })(...$args);
}

function quotemeta(...$args)
{
    return curry('\quotemeta')(...$args);
}

function rtrim(...$args)
{
    return curry('\rtrim')(...$args);
}

function rtrim2(...$args)
{
    return curry(function (string $charMask, string $str) : string {
        return \rtrim($str, $charMask);
    })(...$args);
}

function sha1_file(...$args)
{
    return curry('\sha1_file')(...$args);
}

function sha1_file2(...$args)
{
    return curry(function (bool $rawOutput, string $filename) : string {
        return \sha1_file($filename, $rawOutput);
    })(...$args);
}

function sha1(...$args)
{
    return curry('\sha1')(...$args);
}

function sha12(...$args)
{
    return curry(function (bool $rawOutput, string $str) : string {
        return \sha1($str, $rawOutput);
    })(...$args);
}

function similar_text(...$args)
{
    return curry('\similar_text')(...$args);
}

function similar_text_pct(...$args)
{
    return curry(function (string $str1, string $str2) : float {
        \similar_text($str1, $str2, $percent);
        return $percent;
    })(...$args);
}

function soundex(...$args)
{
    return curry('\soundex')(...$args);
}

function str_getcsv(...$args)
{
    return curry('\str_getcsv')(...$args);
}

function str_getcsv2(...$args)
{
    return curry(function (string $delim, string $str) : array {
        return \str_getcsv($str, $delim);
    })(...$args);
}

function str_getcsv3(...$args)
{
    return curry(function (string $delim, string $enclosure, string $str) : array {
        return \str_getcsv($str, $delim, $enclosure);
    })(...$args);
}

function str_getcsv4(...$args)
{
    return curry(function (string $delim, string $enclosure, string $escape, string $str) : array {
        return \str_getcsv($str, $delim, $enclosure, $escape);
    })(...$args);
}

function str_ireplace(...$args)
{
    return curry('\str_ireplace')(...$args);
}

function str_ireplace_count(...$args)
{
    return curry(function ($search, $replace, $subject) : int {
        \str_ireplace($search, $replace, $subject, $count);
        return $count;
    })(...$args);
}

function str_pad(...$args)
{
    return curry(function (int $length, string $str) : string {
        return \str_pad($str, $length);
    })(...$args);
}

function str_pad3(...$args)
{
    return curry(function (int $length, string $padStr, string $str) : string {
        return \str_pad($str, $length, $padStr);
    })(...$args);
}

function str_pad4(...$args)
{
    return curry(function (int $padType, int $length, string $padStr, string $str) : string {
        return \str_pad($str, $length, $padStr, $padType);
    })(...$args);
}

function str_repeat(...$args)
{
    return curry(function (int $multiplier, string $str) : string {
        return \str_repeat($str, $multiplier);
    })(...$args);
}

function str_replace(...$args)
{
    return curry('\str_replace')(...$args);
}

function str_replace_count(...$args)
{
    return curry(function ($search, $replace, $subject) : int {
        \str_replace($search, $replace, $subject, $count);
        return $count;
    })(...$args);
}

function str_rot13(...$args)
{
    return curry('\str_rot13')(...$args);
}

function str_shuffle(...$args)
{
    return curry('\str_shuffle')(...$args);
}

function str_split(...$args)
{
    return curry('\str_split')(...$args);
}

function str_split2(...$args)
{
    return curry(function (int $len, string $str) : array {
        return \str_split($str, $len);
    })(...$args);
}

function str_word_count(...$args)
{
    return curry('\str_word_count')(...$args);
}

function str_word_count2(...$args)
{
    return curry(function (int $format, string $str) {
        return \str_word_count($str, $format);
    })(...$args);
}

function str_word_count3(...$args)
{
    return curry(function (int $format, string $charList, string $str) {
        return \str_word_count($str, $format, $charList);
    })(...$args);
}

function strcasecmp(...$args)
{
    return curry('\strcasecmp')(...$args);
}

function strchr(...$args)
{
    return curry(function ($needle, string $haystack) : string {
        return \strchr($haystack, $needle);
    })(...$args);
}

function strchr3(...$args)
{
    return curry(function (bool $beforeNeedle, $needle, string $haystack) : string {
        return \strchr($haystack, $needle, $beforeNeedle);
    })(...$args);
}

function strcmp(...$args)
{
    return curry('\strcmp')(...$args);
}

function strcoll(...$args)
{
    return curry('\strcoll')(...$args);
}

function strcspn(...$args)
{
    return curry(function (string $mask, string $str) : int {
        return \strcspn($str, $mask);
    })(...$args);
}

function strcspn3(...$args)
{
    return curry(function (int $start, string $mask, string $str) : int {
        return \strcspn($str, $mask, $start);
    })(...$args);
}

function strcspn4(...$args)
{
    return curry(function (int $start, int $length, string $mask, string $str) : int {
        return \strcspn($str, $mask, $start, $length);
    })(...$args);
}

function strip_tags(...$args)
{
    return curry('\strip_tags')(...$args);
}

function strip_tags2(...$args)
{
    return curry(function (string $allowableTags, string $str) : string {
        return \strip_tags($str, $allowableTags);
    })(...$args);
}

function stripcslashes(...$args)
{
    return curry('\stripcslashes')(...$args);
}

function stripos(...$args)
{
    return curry(function (string $needle, string $haystack) {
        return \stripos($haystack, $needle);
    })(...$args);
}

function stripos3(...$args)
{
    return curry(function (int $offset, string $needle, string $haystack) {
        return \stripos($haystack, $needle, $offset);
    })(...$args);
}

function stripslashes(...$args)
{
    return curry('\stripslashes')(...$args);
}

function stristr(...$args)
{
    return curry(function ($needle, string $haystack) {
        return \stristr($haystack, $needle);
    })(...$args);
}

function stristr3(...$args)
{
    return curry(function (bool $beforeNeedle, $needle, string $haystack) {
        return \stristr($haystack, $needle, $beforeNeedle);
    })(...$args);
}

function strlen(...$args)
{
    return curry('\strlen')(...$args);
}

function strnatcasecmp(...$args)
{
    return curry('\strnatcasecmp')(...$args);
}

function strnatcmp(...$args)
{
    return curry('\strnatcasecmp')(...$args);
}

function strncasecmp(...$args)
{
    return curry(function (int $n, string $a, string $b) : int {
        return \strncasecmp($a, $b, $n);
    })(...$args);
}

function strncmp(...$args)
{
    return curry(function (int $n, string $a, string $b) : int {
        return \strncmp($a, $b, $n);
    })(...$args);
}

function strpbrk(...$args)
{
    return curry(function (string $charList, string $haystack) : string {
        return \strpbrk($haystack, $charList);
    })(...$args);
}

function strpos(...$args)
{
    return curry(function ($needle, string $haystack) {
        return \strpos($haystack, $needle);
    })(...$args);
}

function strpos3(...$args)
{
    return curry(function (int $offset, $needle, string $haystack) {
        return \strpos($haystack, $needle, $offset);
    })(...$args);
}

function strrchr(...$args)
{
    return curry(function ($needle, string $haystack) : string {
        return \strrchr($haystack, $needle);
    })(...$args);
}

function strrev(...$args)
{
    return curry('\strrev')(...$args);
}

function strripos(...$args)
{
    return curry(function (string $needle, string $haystack) : int {
        return \strripos($haystack, $needle);
    })(...$args);
}

function strripos3(...$args)
{
    return curry(function (int $offset, string $needle, string $haystack) : int {
        return \strripos($haystack, $needle, $offset);
    })(...$args);
}

function strrpos(...$args)
{
    return curry(function (string $needle, string $haystack) {
        return \strrpos($haystack, $needle);
    })(...$args);
}

function strrpos3(...$args)
{
    return curry(function (int $offset, string $needle, string $haystack) {
        return \strrpos($haystack, $needle, $offset);
    })(...$args);
}

function strspn(...$args)
{
    return curry(function (string $mask, string $subject) : int {
        return \strspn($subject, $mask);
    })(...$args);
}

function strspn3(...$args)
{
    return curry(function (int $start, string $mask, string $subject) : int {
        return \strspn($subject, $mask, $start);
    })(...$args);
}

function strspn4(...$args)
{
    return curry(function (int $start, int $length, string $mask, string $subject) : int {
        return \strspn($subject, $mask, $start, $length);
    })(...$args);
}

function strstr(...$args)
{
    return curry(function ($needle, string $haystack) : string {
        return \strstr($haystack, $needle);
    })(...$args);
}

function strstr3(...$args)
{
    return curry(function (bool $beforeNeedle, $needle, string $haystack) : string {
        return \strstr($haystack, $needle, $beforeNeedle);
    })(...$args);
}

function strtok(...$args)
{
    return curry(function (string $token, string $str) {
        return \strtok($str, $token);
    })(...$args);
}

function strtok1(...$args)
{
    return curry(function (string $token) {
        return \strtok($token);
    })(...$args);
}

function strtolower(...$args)
{
    return curry('\strtolower')(...$args);
}

function strtoupper(...$args)
{
    return curry('\strtoupper')(...$args);
}

function strtr(...$args)
{
    $f = function (...$args2) use (&$f) {
        if (count($args2) > 0) {
            if (is_array($args2[0])) {
                return curry(function (array $replacePairs, string $str) : string {
                    return \strtr($str, $replacePairs);
                })(...$args2);
            } elseif (is_string($args2[0])) {
                return curry(function (string $from, string $to, string $str) : string {
                    return \strtr($str, $from, $to);
                })(...$args2);
            }
        }

        return $f;
    };

    return $f(...$args);
}

function substr_compare(...$args)
{
    return curry(function (int $offset, string $str, string $mainStr) : int {
        return \substr_compare($mainStr, $str, $offset);
    })(...$args);
}

function substr_compare4(...$args)
{
    return curry(function (int $length, int $offset, string $str, string $mainStr) : int {
        return \substr_compare($mainStr, $str, $offset, $length);
    })(...$args);
}

function substr_compare5(...$args)
{
    return curry(function (bool $caseInsensitive, int $length, int $offset, string $str, string $mainStr) : int {
        return \substr_compare($mainStr, $str, $offset, $length, $caseInsensitive);
    })(...$args);
}

function substr_count(...$args)
{
    return curry(function (string $needle, string $haystack) : int {
        return \substr_count($haystack, $needle);
    })(...$args);
}

function substr_count3(...$args)
{
    return curry(function (int $offset, string $needle, string $haystack) : int {
        return \substr_count($haystack, $needle, $offset);
    })(...$args);
}

function substr_count4(...$args)
{
    return curry(function (int $length, int $offset, string $needle, string $haystack) : int {
        return \substr_count($haystack, $needle, $offset, $length);
    })(...$args);
}

function substr_replace(...$args)
{
    return curry(function ($start, $replacement, $str) {
        return \substr_replace($str, $replacement, $start);
    })(...$args);
}

function substr_replace4(...$args)
{
    return curry(function ($length, $start, $replacement, $str) {
        return \substr_replace($str, $replacement, $start, $length);
    })(...$args);
}

function substr(...$args)
{
    return curry(function (int $start, string $str) : string {
        return \substr($str, $start);
    })(...$args);
}

function substr3(...$args)
{
    return curry(function (int $length, int $start, string $str) : string {
        return \substr($str, $start, $length);
    })(...$args);
}

function trim(...$args)
{
    return curry('\trim')(...$args);
}

function trim2(...$args)
{
    return curry(function (string $charMask, string $str) : string {
        return \trim($str, $charMask);
    })(...$args);
}

function ucfirst(...$args)
{
    return curry('\ucfirst')(...$args);
}

function ucwords(...$args)
{
    return curry('\ucwords')(...$args);
}

function ucwords2(...$args)
{
    return curry(function (string $delims, string $str) : string {
        return \ucwords($str, $delims);
    })(...$args);
}

function wordwrap(...$args)
{
    return curry('\wordwrap')(...$args);
}

function wordwrap2(...$args)
{
    return curry(function (int $width, string $str) : string {
        return \wordwrap($str, $width);
    })(...$args);
}

function wordwrap3(...$args)
{
    return curry(function (string $break, int $width, string $str) : string {
        return \wordwrap($str, $width, $break);
    })(...$args);
}

function wordwrap4(...$args)
{
    return curry(function (bool $cut, string $break, int $width, string $str) : string {
        return \wordwrap($str, $width, $break, $cut);
    })(...$args);
}

function array_change_key_case(...$args)
{
    return curry('\array_change_key_case')(...$args);
}

function array_change_key_case2(...$args)
{
    return curry(function (int $case, array $arr) : array {
        return \array_change_key_case($arr, $case);
    })(...$args);
}

function array_chunk(...$args)
{
    return curry(function (int $size, array $arr) : array {
        return \array_chunk($arr, $size);
    })(...$args);
}

function array_chunk3(...$args)
{
    return curry(function (bool $preserveKeys, int $size, array $arr) : array {
        return \array_chunk($arr, $size, $preserveKeys);
    })(...$args);
}

function array_column(...$args)
{
    return curry(function ($column_key, array $input) : array {
        return \array_column($input, $column_key);
    })(...$args);
}

function array_column3(...$args)
{
    return curry(function ($index_key, $column_key, array $input) : array {
        return \array_column($input, $column_key, $index_key);
    })(...$args);
}

function array_combine(...$args)
{
    return curry('\array_combine')(...$args);
}

function array_count_values(...$args)
{
    return curry('\array_count_values')(...$args);
}

function array_diff_assoc(...$args)
{
    return curry('\array_diff_assoc')(...$args);
}

function array_diff_key(...$args)
{
    return curry('\array_diff_key')(...$args);
}

function array_diff_uassoc(...$args)
{
    return curry(function (callable $f, array $a, array $b) : array {
        return \array_diff_uassoc($a, $b, $f);
    })(...$args);
}

function array_diff_ukey(...$args)
{
    return curry(function (callable $f, array $a, array $b) : array {
        return \array_diff_ukey($a, $b, $f);
    })(...$args);
}

function array_diff(...$args)
{
    return curry('\array_diff')(...$args);
}

function array_fill_keys(...$args)
{
    return curry(function ($val, array $keys) : array {
        return \array_fill_keys($keys, $val);
    })(...$args);
}

function array_fill(...$args)
{
    return curry(function (int $num, int $startIndex, $value) : array {
        return \array_fill($startIndex, $num, $value);
    })(...$args);
    return curry('\array_fill')(...$args);
}

function array_filter(...$args)
{
    return curry('\array_filter')(...$args);
}

function array_filter2(...$args)
{
    return curry(function (callable $f, array $a) : array {
        return \array_filter($a, $f);
    })(...$args);
}

function array_filter3(...$args)
{
    return curry(function (int $flag, callable $f, array $a) : array {
        return \array_filter($a, $f, $flag);
    })(...$args);
}

function array_flip(...$args)
{
    return curry('\array_flip')(...$args);
}

function array_intersect_assoc(...$args)
{
    return curry('\array_intersect_assoc')(...$args);
}

function array_intersect_key(...$args)
{
    return curry('\array_intersect_key')(...$args);
}

function array_intersect_uassoc(...$args)
{
    return curry(function (callable $f, array $a, array $b) : array {
        return \array_intersect_uassoc($a, $b, $f);
    })(...$args);
}

function array_intersect_ukey(...$args)
{
    return curry(function (callable $f, array $a, array $b) : array {
        return \array_intersect_ukey($a, $b, $f);
    })(...$args);
}

function array_intersect(...$args)
{
    return curry('\array_intersect')(...$args);
}

function array_key_exists(...$args)
{
    return curry('\array_key_exists')(...$args);
}

function key_exists(...$args)
{
    return curry('\key_exists')(...$args);
}

function array_keys(...$args)
{
    return curry('\array_keys')(...$args);
}

function array_keys2(...$args)
{
    return curry(function ($searchVal, array $arr) : array {
        return \array_keys($arr, $searchVal);
    })(...$args);
}

function array_keys3(...$args)
{
    return curry(function (bool $strict, $searchVal, array $arr) : array {
        return \array_keys($arr, $searchVal, $strict);
    })(...$args);
}

function array_map(...$args)
{
    return curry('\array_map')(...$args);
}

function array_merge_recursive(...$args)
{
    return curry(function (array $a, array $b) : array {
        return \array_merge_recursive($a, $b);
    })(...$args);
}

function array_merge(...$args)
{
    return curry(function (array $a, array $b) : array {
        return \array_merge($a, $b);
    })(...$args);
}

function array_pad(...$args)
{
    return curry(function (int $size, $value, array $arr) : array {
        return \array_pad($arr, $size, $value);
    })(...$args);
}

function array_product(...$args)
{
    return curry('\array_product')(...$args);
}

function array_rand(...$args)
{
    return curry('\array_rand')(...$args);
}

function array_rand2(...$args)
{
    return curry(function (int $num, array $arr) {
        return \array_rand($arr, $num);
    })(...$args);
}

function array_reduce(...$args)
{
    return curry(function (callable $f, $i, array $x) {
        return \array_reduce($x, $f, $i);
    })(...$args);
}

function array_replace_recursive(...$args)
{
    return curry(function (array $replacements, array $base) : array {
        return \array_replace_recursive($base, $replacements);
    })(...$args);
}

function array_replace(...$args)
{
    return curry(function (array $replacements, array $base) : array {
        return \array_replace($base, $replacements);
    })(...$args);
}

function array_reverse(...$args)
{
    return curry('\array_reverse')(...$args);
}

function array_reverse2(...$args)
{
    return curry(function (bool $preserveKeys, array $arr) : array {
        return \array_reverse($arr, $preserveKeys);
    })(...$args);
}

function array_search(...$args)
{
    return curry('\array_search')(...$args);
}

function array_search3(...$args)
{
    return curry(function (bool $strict, $needle, array $haystack) {
        return \array_search($needle, $haystack, $strict);
    })(...$args);
}

function array_slice(...$args)
{
    return curry(function (int $offset, array $arr) : array {
        return \array_slice($arr, $offset);
    })(...$args);
}

function array_slice3(...$args)
{
    return curry(function (int $length, int $offset, array $arr) : array {
        return \array_slice($arr, $offset, $length);
    })(...$args);
}

function array_slice4(...$args)
{
    return curry(function (bool $preserveKeys, int $length, int $offset, array $arr) : array {
        return \array_slice($arr, $offset, $length, $preserveKeys);
    })(...$args);
}

function array_sum(...$args)
{
    return curry('\array_sum')(...$args);
}

function array_udiff_assoc(...$args)
{
    return curry(function (callable $f, array $a1, array $a2) : array {
        return \array_udiff_assoc($a1, $a2, $f);
    })(...$args);
}

function array_udiff_uassoc(...$args)
{
    return curry(function (callable $f, callable $g, array $a1, array $a2) : array {
        return \array_udiff_uassoc($a1, $a2, $f, $g);
    })(...$args);
}

function array_udiff(...$args)
{
    return curry(function (callable $f, array $a1, array $a2) : array {
        return \array_udiff($a1, $a2, $f);
    })(...$args);
}

function array_uintersect_assoc(...$args)
{
    return curry(function (callable $f, array $a1, array $a2) : array {
        return \array_uintersect_assoc($a1, $a2, $f);
    })(...$args);
}

function array_uintersect_uassoc(...$args)
{
    return curry(function (callable $f, callable $g, array $a1, array $a2) : array {
        return \array_uintersect_uassoc($a1, $a2, $f, $g);
    })(...$args);
}

function array_uintersect(...$args)
{
    return curry(function (callable $f, array $a1, array $a2) : array {
        return \array_uintersect($a1, $a2, $f);
    })(...$args);
}

function array_unique(...$args)
{
    return curry('\array_unique')(...$args);
}

function array_unique2(...$args)
{
    return curry(function (int $sortFlags, array $arr) : array {
        return \array_unique($arr, $sortFlags);
    })(...$args);
}

function count(...$args)
{
    return curry('\count')(...$args);
}

function count2(...$args)
{
    return curry(function (int $mode, $arr) : int {
        return \count($arr, $mode);
    })(...$args);
}

function sizeof(...$args)
{
    return curry('\sizeof')(...$args);
}

function sizeof2(...$args)
{
    return curry(function (int $mode, $arr) : int {
        return \sizeof($arr, $mode);
    })(...$args);
}

function in_array(...$args)
{
    return curry('\in_array')(...$args);
}

function in_array3(...$args)
{
    return curry(function (bool $strict, $needle, array $haystack) : bool {
        return \in_array($needle, $haystack, $strict);
    })(...$args);
}

function range(...$args)
{
    return curry('\range')(...$args);
}

function range3(...$args)
{
    return curry(function (float $step, $start, $end) : array {
        return \range($start, $end, $step);
    })(...$args);
}

function shuffle(...$args)
{
    return curry(function (array $arr) : array {
        \shuffle($arr);
        return $arr;
    })(...$args);
}

function rsort(...$args)
{
    return curry(function (array $arr) : array {
        \rsort($arr);
        return $arr;
    })(...$args);
}

function rsort2(...$args)
{
    return curry(function (int $sortFlags, array $arr) : array {
        \rsort($arr, $sortFlags);
        return $arr;
    })(...$args);
}

function krsort(...$args)
{
    return curry(function (array $arr) : array {
        \krsort($arr);
        return $arr;
    })(...$args);
}

function krsort2(...$args)
{
    return curry(function (int $sortFlags, array $arr) : array {
        \krsort($arr, $sortFlags);
        return $arr;
    })(...$args);
}

function ksort(...$args)
{
    return curry(function (array $arr) : array {
        \ksort($arr);
        return $arr;
    })(...$args);
}

function ksort2(...$args)
{
    return curry(function (int $sortFlags, array $arr) : array {
        \ksort($arr, $sortFlags);
        return $arr;
    })(...$args);
}

function natcasesort(...$args)
{
    return curry(function (array $arr) : array {
        \natcasesort($arr);
        return $arr;
    })(...$args);
}

function natsort(...$args)
{
    return curry(function (array $arr) : array {
        \natsort($arr);
        return $arr;
    })(...$args);
}

function arsort(...$args)
{
    return curry(function (array $arr) : array {
        \arsort($arr);
        return $arr;
    })(...$args);
}

function arsort2(...$args)
{
    return curry(function (int $sortFlags, array $arr) : array {
        \arsort($arr, $sortFlags);
        return $arr;
    })(...$args);
}

function asort(...$args)
{
    return curry(function (array $arr) : array {
        \asort($arr);
        return $arr;
    })(...$args);
}

function asort2(...$args)
{
    return curry(function (int $sortFlags, array $arr) : array {
        \asort($arr, $sortFlags);
        return $arr;
    })(...$args);
}

function sort(...$args)
{
    return curry(function (array $arr) : array {
        \sort($arr);
        return $arr;
    })(...$args);
}

function sort2(...$args)
{
    return curry(function (int $sortFlags, array $arr) : array {
        \sort($arr, $sortFlags);
        return $arr;
    })(...$args);
}

function uasort(...$args)
{
    return curry(function (callable $f, array $arr) : array {
        \uasort($arr, $f);
        return $arr;
    })(...$args);
}

function uksort(...$args)
{
    return curry(function (callable $f, array $arr) : array {
        \uksort($arr, $f);
        return $arr;
    })(...$args);
}

function usort(...$args)
{
    return curry(function (callable $f, array $arr) : array {
        \usort($arr, $f);
        return $arr;
    })(...$args);
}

function array_push(...$args)
{
    return curry(function ($value, array $arr) : array {
        return \array_merge($arr, [$value]);
    })(...$args);
}

function array_pop(...$args)
{
    return curry(function (array $arr) {
        return \array_pop($arr);
    })(...$args);
}

function array_shift(...$args)
{
    return curry(function (array $arr) {
        return \array_shift($arr);
    })(...$args);
}

function array_unshift(...$args)
{
    return curry(function ($elem, array $arr) {
        \array_unshift($arr, $elem);
        return $arr;
    })(...$args);
}

function array_splice(...$args)
{
    return curry(function (int $offset, array $input) : array {
        \array_splice($input, $offset);
        return $input;
    })(...$args);
}

function array_splice3(...$args)
{
    return curry(function (int $offset, int $length, array $input) : array {
        \array_splice($input, $offset, $length);
        return $input;
    })(...$args);
}

function array_splice4(...$args)
{
    return curry(function (int $offset, int $length, $replacement, array $input) : array {
        \array_splice($input, $offset, $length, $replacement);
        return $input;
    })(...$args);
}

function checkdate(...$args)
{
    return curry('\checkdate')(...$args);
}

function date_create_from_format(...$args)
{
    return curry('\date_create_from_format')(...$args);
}

function date_create_from_format3(...$args)
{
    return curry(function (\DateTimeZone $timezone, string $format, string $time) : \DateTime {
        return \date_create_from_format($format, $time, $timezone);
    })(...$args);
}

function date_create_immutable_from_format(...$args)
{
    return curry('\date_create_immutable_from_format')(...$args);
}

function date_create_immutable_from_format3(...$args)
{
    return curry(function (\DateTimeZone $timezone, string $format, string $time) : \DateTimeImmutable {
        return \date_create_immutable_from_format($format, $time, $timezone);
    })(...$args);
}

function date_create_immutable1(...$args)
{
    return curry(function (string $time) : \DateTimeImmutable {
        return \date_create_immutable($time);
    })(...$args);
}

function date_create_immutable2(...$args)
{
    return curry(function (\DateTimeZone $timezone, string $time) : \DateTimeImmutable {
        return \date_create_immutable($time, $timezone);
    })(...$args);
}

function date_create1(...$args)
{
    return curry(function (string $time) : \DateTime {
        return \date_create($time);
    })(...$args);
}

function date_create2(...$args)
{
    return curry(function (\DateTimeZone $timezone, string $time) : \DateTime {
        return \date_create($time, $timezone);
    })(...$args);
}

function date_add(...$args)
{
    return curry(function (\DateInterval $interval, \DateTime $date) : \DateTime {
        return \date_add(clone $date, $interval);
    })(...$args);
}

function date_date_set(...$args)
{
    return curry(function (int $year, int $month, int $day, \DateTime $object) : \DateTime {
        return \date_date_set(clone $object, $year, $month, $day);
    })(...$args);
}

function date_default_timezone_set(...$args)
{
    return curry('\date_default_timezone_set')(...$args);
}

function date_diff(...$args)
{
    return curry('\date_diff')(...$args);
}

function date_diff3(...$args)
{
    return curry(function (bool $absolute, \DateTimeInterface $d1, \DateTimeInterface $d2) : \DateInterval {
        return \date_diff($d1, $d2, $absolute);
    })(...$args);
}

function date_format(...$args)
{
    return curry(function (string $format, \DateTimeInterface $object) : string {
        return \date_format($object, $format);
    })(...$args);
}

function date_interval_create_from_date_string(...$args)
{
    return curry('\date_interval_create_from_date_string')(...$args);
}

function date_interval_format(...$args)
{
    return curry(function (string $format, \DateInterval $obj) : string {
        return \date_interval_format($obj, $format);
    })(...$args);
}

function date_isodate_set(...$args)
{
    return curry(function (int $year, int $week, \DateTime $object) : \DateTime {
        return \date_isodate_set(clone $object, $year, $week);
    })(...$args);
}

function date_isodate_set4(...$args)
{
    return curry(function (int $year, int $week, int $day, \DateTime $object) : \DateTime {
        return \date_isodate_set(clone $object, $year, $week, $day);
    })(...$args);
}

function date_modify(...$args)
{
    return curry(function (string $modify, \DateTime $object) : \DateTime {
        return \date_modify(clone $object, $modify);
    })(...$args);
}

function date_offset_get(...$args)
{
    return curry('\date_offset_get')(...$args);
}

function date_parse_from_format(...$args)
{
    return curry('\date_parse_from_format')(...$args);
}

function date_parse(...$args)
{
    return curry('\date_parse')(...$args);
}

function date_sub(...$args)
{
    return curry(function (\DateInterval $interval, \DateTime $object) : \DateTime {
        return \date_sub(clone $object, $interval);
    })(...$args);
}

function date_sun_info(...$args)
{
    return curry(function (float $latitude, float $longitude, int $time) : array {
        return \date_sun_info($time, $latitude, $longitude);
    })(...$args);
}

function date_sunrise(...$args)
{
    return curry('\date_sunrise')(...$args);
}

function date_sunrise2(...$args)
{
    return curry(function (int $format, int $timestamp) {
        return \date_sunrise($timestamp, $format);
    })(...$args);
}

function date_sunset(...$args)
{
    return curry('\date_sunset')(...$args);
}

function date_sunset2(...$args)
{
    return curry(function (int $format, int $timestamp) {
        return \date_sunset($timestamp, $format);
    })(...$args);
}

function date_time_set(...$args)
{
    return curry(function (int $hour, int $minute, \DateTime $object) : \DateTime {
        return \date_time_set(clone $object, $hour, $minute);
    })(...$args);
}

function date_time_set4(...$args)
{
    return curry(function (int $hour, int $minute, int $second, \DateTime $object) : \DateTime {
        return \date_time_set(clone $object, $hour, $minute, $second);
    })(...$args);
}

function date_timestamp_get(...$args)
{
    return curry('\date_timestamp_get')(...$args);
}

function date_timestamp_set(...$args)
{
    return curry(function (int $unix, \DateTime $object) : \DateTime {
        return \date_timestamp_set(clone $object, $unix);
    })(...$args);
}

function date_timezone_get(...$args)
{
    return curry('\date_timezone_get')(...$args);
}

function date_timezone_set(...$args)
{
    return curry(function (\DateTimeZone $time, \DateTime $object) : \DateTime {
        return \date_timezone_set(clone $object, $time);
    })(...$args);
}

function date(...$args)
{
    return curry('\date')(...$args);
}

function date2(...$args)
{
    return curry(function (string $format, int $timestamp) : string {
        return \date($format, $timestamp);
    })(...$args);
}

function getdate1(...$args)
{
    return curry(function (int $timestamp) : array {
        return \getdate($timestamp);
    })(...$args);
}

function gettimeofday1(...$args)
{
    return curry(function (bool $returnFloat) {
        return \gettimeofday($returnFloat);
    })(...$args);
}

function gmdate(...$args)
{
    return curry('\gmdate')(...$args);
}

function gmdate2(...$args)
{
    return curry(function (string $format, int $timestamp) : string {
        return \gmdate($format, $timestamp);
    })(...$args);
}

function gmstrftime(...$args)
{
    return curry('\gmstrftime')(...$args);
}

function gmstrftime2(...$args)
{
    return curry(function (string $format, int $timestamp) : string {
        return \gmstrftime($format, $timestamp);
    })(...$args);
}

function idate(...$args)
{
    return curry('\idate')(...$args);
}

function idate2(...$args)
{
    return curry(function (string $format, int $timestamp) : int {
        return \idate($format, $timestamp);
    })(...$args);
}

function localtime1(...$args)
{
    return curry(function (int $time) : array {
        return \localtime($time);
    })(...$args);
}

function localtime2(...$args)
{
    return curry(function (bool $isAssociative, int $time) : array {
        return \localtime($time, $isAssociative);
    })(...$args);
}

function microtime1(...$args)
{
    return curry(function (bool $getAsFloat) {
        return \microtime($getAsFloat);
    })(...$args);
}

function strftime(...$args)
{
    return curry('\strftime')(...$args);
}

function strftime2(...$args)
{
    return curry(function (string $format, int $timestamp) : string {
        return \strftime($format, $timestamp);
    })(...$args);
}

function strptime(...$args)
{
    return curry(function (string $format, string $date) : array {
        return \strptime($date, $format);
    })(...$args);
}

function strtotime(...$args)
{
    return curry('\strtotime')(...$args);
}

function strtotime2(...$args)
{
    return curry(function (int $now, string $time) : int {
        return \strtotime($time, $now);
    })(...$args);
}

function timezone_identifiers_list1(...$args)
{
    return curry(function (int $what) : array {
        return \timezone_identifiers_list($what);
    })(...$args);
}

function timezone_identifiers_list2(...$args)
{
    return curry(function (string $country, int $what) : array {
        return \timezone_identifiers_list($what, $country);
    })(...$args);
}

function timezone_location_get(...$args)
{
    return curry('\timezone_location_get')(...$args);
}

function timezone_name_from_abbr(...$args)
{
    return curry('\timezone_name_from_abbr')(...$args);
}

function timezone_name_from_abbr2(...$args)
{
    return curry(function (int $gmtOffset, string $abbr) {
        return \timezone_name_from_abbr($abbr, $gmtOffset);
    })(...$args);
}

function timezone_name_from_abbr3(...$args)
{
    return curry(function (int $isdst, int $gmtOffset, string $abbr) : string {
        return \timezone_name_from_abbr($abbr, $gmtOffset, $isdst);
    })(...$args);
}

function timezone_name_get(...$args)
{
    return curry('\timezone_name_get')(...$args);
}

function timezone_offset_get(...$args)
{
    return curry('\timezone_offset_get')(...$args);
}

function timezone_open(...$args)
{
    return curry('\timezone_open')(...$args);
}

function timezone_transitions_get(...$args)
{
    return curry('\timezone_transitions_get')(...$args);
}

function timezone_transitions_get2(...$args)
{
    return curry(function (int $timestampBegin, \DateTimeZone $object) : array {
        return \timezone_transitions_get($object, $timestampBegin);
    })(...$args);
}

function timezone_transitions_get3(...$args)
{
    return curry(function (int $timestampBegin, int $timestampEnd, \DateTimeZone $object) : array {
        return \timezone_transitions_get($object, $timestampBegin, $timestampEnd);
    })(...$args);
}

function json_decode(...$args)
{
    return curry('\json_decode')(...$args);
}

function json_decode2(...$args)
{
    return curry(function (bool $assoc, string $json) {
        return \json_decode($json, $assoc);
    })(...$args);
}

function json_decode3(...$args)
{
    return curry(function (int $depth, bool $assoc, string $json) {
        return \json_decode($json, $assoc, $depth);
    })(...$args);
}

function json_decode4(...$args)
{
    return curry(function (int $options, int $depth, bool $assoc, string $json) {
        return \json_decode($json, $assoc, $depth, $options);
    })(...$args);
}

function json_encode(...$args)
{
    return curry('\json_encode')(...$args);
}

function json_encode2(...$args)
{
    return curry(function (int $options, $value) {
        return \json_encode($value, $options);
    })(...$args);
}

function json_encode3(...$args)
{
    return curry(function (int $depth, int $options, $value) {
        return \json_encode($value, $options, $depth);
    })(...$args);
}

function basename(...$args)
{
    return curry('\basename')(...$args);
}

function basename2(...$args)
{
    return curry(function (string $suffix, string $path) : string {
        return \basename($path, $suffix);
    })(...$args);
}

function chgrp(...$args)
{
    return curry(function ($group, string $filename) : bool {
        return \chgrp($filename, $group);
    })(...$args);
}

function chmod(...$args)
{
    return curry(function (int $mode, string $filename) : bool {
        return \chmod($filename, $mode);
    })(...$args);
}

function chown(...$args)
{
    return curry(function ($user, string $filename) : bool {
        return \chown($filename, $user);
    })(...$args);
}

function copy(...$args)
{
    return curry('\copy')(...$args);
}

function copy3(...$args)
{
    return curry(function ($context, string $source, string $dest) : bool {
        return \copy($source, $dest, $context);
    })(...$args);
}

function dirname(...$args)
{
    return curry('\dirname')(...$args);
}

function dirname2(...$args)
{
    return curry(function (int $levels, string $path) : string {
        return \dirname($path, $levels);
    })(...$args);
}

function disk_free_space(...$args)
{
    return curry('\disk_free_space')(...$args);
}

function disk_total_space(...$args)
{
    return curry('\disk_total_space')(...$args);
}

function diskfreespace(...$args)
{
    return curry('\diskfreespace')(...$args);
}

function fclose(...$args)
{
    return curry('\fclose')(...$args);
}

function feof(...$args)
{
    return curry('\feof')(...$args);
}

function fflush(...$args)
{
    return curry('\fflush')(...$args);
}

function fgetc(...$args)
{
    return curry('\fgetc')(...$args);
}

function fgetcsv(...$args)
{
    return curry('\fgetcsv')(...$args);
}

function fgetcsv2(...$args)
{
    return curry(function (int $length, $handle) : array {
        return \fgetcsv($handle, $length);
    })(...$args);
}

function fgetcsv3(...$args)
{
    return curry(function (string $delimiter, int $length, $handle) : array {
        return \fgetcsv($handle, $length, $delimiter);
    })(...$args);
}

function fgetcsv4(...$args)
{
    return curry(function (string $enclosure, string $delimiter, int $length, $handle) : array {
        return \fgetcsv($handle, $length, $delimiter, $enclosure);
    })(...$args);
}

function fgetcsv5(...$args)
{
    return curry(function (string $escape, string $enclosure, string $delimiter, int $length, $handle) : array {
        return \fgetcsv($handle, $length, $delimiter, $enclosure, $escape);
    })(...$args);
}

function fgets(...$args)
{
    return curry('\fgets')(...$args);
}

function fgets2(...$args)
{
    return curry(function (int $length, $resource) : string {
        return \fgets($resource, $length);
    })(...$args);
}

function fgetss(...$args)
{
    return curry('\fgetss')(...$args);
}

function fgetss2(...$args)
{
    return curry(function (int $length, $handle) : string {
        return \fgetss($handle, $length);
    })(...$args);
}

function fgetss3(...$args)
{
    return curry(function (string $allowableTags, int $length, $handle) : string {
        return \fgetss($handle, $length, $allowable_tags);
    })(...$args);
}

function file_exists(...$args)
{
    return curry('\file_exists')(...$args);
}

function file_get_contents(...$args)
{
    return curry('\file_get_contents')(...$args);
}

function file_get_contents2(...$args)
{
    return curry(function (bool $use_include_path, string $filename) : string {
        return \file_get_contents($filename, $use_include_path);
    })(...$args);
}

function file_get_contents3(...$args)
{
    return curry(function ($context, bool $use_include_path, string $filename) : string {
        return \file_get_contents($filename, $use_include_path, $context);
    })(...$args);
}

function file_get_contents4(...$args)
{
    return curry(function (int $offset, $context, bool $use_include_path, string $filename) : string {
        return \file_get_contents($filename, $use_include_path, $context, $offset);
    })(...$args);
}

function file_get_contents5(...$args)
{
    return curry(function (int $maxLen, int $offset, $context, bool $use_include_path, string $filename) : string {
        return \file_get_contents($filename, $use_include_path, $context, $offset, $maxLen);
    })(...$args);
}

function file_put_contents(...$args)
{
    return curry(function ($data, string $filename) : int {
        return \file_put_contents($filename, $data);
    })(...$args);
}

function file_put_contents3(...$args)
{
    return curry(function (int $flags, $data, string $filename) : int {
        return \file_put_contents($filename, $data, $flags);
    })(...$args);
}

function file_put_contents4(...$args)
{
    return curry(function ($context, int $flags, $data, string $filename) : int {
        return \file_put_contents($filename, $data, $flags, $context);
    })(...$args);
}

function file(...$args)
{
    return curry('\file')(...$args);
}

function file2(...$args)
{
    return curry(function (int $flags, string $filename) : array {
        return \file($filename, $flags);
    })(...$args);
}

function file3(...$args)
{
    return curry(function ($context, int $flags, string $filename) : array {
        return \file($filename, $flags, $context);
    })(...$args);
}

function fileatime(...$args)
{
    return curry('\fileatime')(...$args);
}

function filectime(...$args)
{
    return curry('\filectime')(...$args);
}

function filegroup(...$args)
{
    return curry('\filegroup')(...$args);
}

function fileinode(...$args)
{
    return curry('\fileinode')(...$args);
}

function filemtime(...$args)
{
    return curry('\filemtime')(...$args);
}

function fileowner(...$args)
{
    return curry('\fileowner')(...$args);
}

function fileperms(...$args)
{
    return curry('\fileperms')(...$args);
}

function filesize(...$args)
{
    return curry('\filesize')(...$args);
}

function filetype(...$args)
{
    return curry('\filetype')(...$args);
}

function flock(...$args)
{
    return curry(function (int $operation, $handle) : bool {
        return \flock($handle, $operation);
    })(...$args);
}

function fnmatch(...$args)
{
    return curry('\fnmatch')(...$args);
}

function fnmatch3(...$args)
{
    return curry(function (int $flags, string $pattern, string $string) : bool {
        return \fnmatch($pattern, $string, $flags);
    })(...$args);
}

function fopen(...$args)
{
    return curry(function (string $mode, string $filename) {
        return \fopen($filename, $mode);
    })(...$args);
}

function fopen3(...$args)
{
    return curry(function (bool $use_include_path, string $mode, string $filename) {
        return \fopen($filename, $mode, $use_include_path);
    })(...$args);
}

function fopen4(...$args)
{
    return curry(function ($context, bool $use_include_path, string $mode, string $filename) {
        return \fopen($filename, $mode, $use_include_path, $context);
    })(...$args);
}

function fpassthru(...$args)
{
    return curry('\fpassthru')(...$args);
}

function fputcsv(...$args)
{
    return curry(function (array $fields, $handle) {
        return \fputcsv($handle, $fields);
    })(...$args);
}

function fputcsv3(...$args)
{
    return curry(function (string $delimiter, array $fields, $handle) {
        return \fputcsv($handle, $fields, $delimiter);
    })(...$args);
}

function fputcsv4(...$args)
{
    return curry(function (string $enclosure, string $delimiter, array $fields, $handle) {
        return \fputcsv($handle, $fields, $delimiter, $enclosure);
    })(...$args);
}

function fputcsv5(...$args)
{
    return curry(function (string $escape_char, string $enclosure, string $delimiter, array $fields, $handle) {
        return \fputcsv($handle, $fields, $delimiter, $enclosure, $escape_char);
    })(...$args);
}

function fputs(...$args)
{
    return curry(function (string $string, $handle) {
        return \fputs($handle, $string);
    })(...$args);
}

function fputs3(...$args)
{
    return curry(function (int $length, string $string, $handle) {
        return \fputs($handle, $string, $length);
    })(...$args);
}

function fread(...$args)
{
    return curry(function (int $length, $handle) {
        return \fread($handle, $length);
    })(...$args);
}

function fseek(...$args)
{
    return curry(function (int $offset, $handle) : int {
        return \fseek($handle, $offset);
    })(...$args);
}

function fseek3(...$args)
{
    return curry(function (int $whence, int $offset, $handle) : int {
        return \fseek($handle, $offset, $whence);
    })(...$args);
}

function fstat(...$args)
{
    return curry('\fstat')(...$args);
}

function ftell(...$args)
{
    return curry('\ftell')(...$args);
}

function ftruncate(...$args)
{
    return curry(function (int $size, $handle) : bool {
        return \ftruncate($handle, $size);
    })(...$args);
}

function fwrite(...$args)
{
    return curry(function (string $string, $handle) {
        return \fwrite($handle, $string);
    })(...$args);
}

function fwrite3(...$args)
{
    return curry(function (int $length, string $string, $handle) {
        return \fwrite($handle, $string, $length);
    })(...$args);
}

function glob(...$args)
{
    return curry('\glob')(...$args);
}

function glob2(...$args)
{
    return curry(function (int $flags, string $pattern) : array {
        return \glob($pattern, $flags);
    })(...$args);
}

function is_dir(...$args)
{
    return curry('\is_dir')(...$args);
}

function is_executable(...$args)
{
    return curry('\is_executable')(...$args);
}

function is_file(...$args)
{
    return curry('\is_file')(...$args);
}

function is_link(...$args)
{
    return curry('\is_link')(...$args);
}

function is_readable(...$args)
{
    return curry('\is_readable')(...$args);
}

function is_uploaded_file(...$args)
{
    return curry('\is_uploaded_file')(...$args);
}

function is_writable(...$args)
{
    return curry('\is_writable')(...$args);
}

function is_writeable(...$args)
{
    return curry('\is_writeable')(...$args);
}

function lchgrp(...$args)
{
    return curry(function ($group, string $filename) : bool {
        return \lchgrp($filename, $group);
    })(...$args);
}

function lchown(...$args)
{
    return curry(function ($user, string $filename) : bool {
        return \lchown($filename, $user);
    })(...$args);
}

function link(...$args)
{
    return curry(function (string $link, string $target) : bool {
        return \link($target, $link);
    })(...$args);
}

function linkinfo(...$args)
{
    return curry('\linkinfo')(...$args);
}

function lstat(...$args)
{
    return curry('\lstat')(...$args);
}

function mkdir(...$args)
{
    return curry('\mkdir')(...$args);
}

function mkdir2(...$args)
{
    return curry(function (int $mode, string $pathname) : bool {
        return \mkdir($pathname, $mode);
    })(...$args);
}

function mkdir3(...$args)
{
    return curry(function (bool $recursive, int $mode, string $pathname) : bool {
        return \mkdir($pathname, $mode, $recursive);
    })(...$args);
}

function mkdir4(...$args)
{
    return curry(function ($context, bool $recursive, int $mode, string $pathname) : bool {
        return \mkdir($pathname, $mode, $recursive, $context);
    })(...$args);
}

function move_uploaded_file(...$args)
{
    return curry(function (string $destination, string $filename) : bool {
        return \move_uploaded_file($filename, $destination);
    })(...$args);
}

function parse_ini_file(...$args)
{
    return curry('\parse_ini_file')(...$args);
}

function parse_ini_file2(...$args)
{
    return curry(function (bool $process_sections, string $filename) : array {
        return \parse_ini_file($filename, $process_sections);
    })(...$args);
}

function parse_ini_file3(...$args)
{
    return curry(function (int $scanner_mode, bool $process_sections, string $filename) : array {
        return \parse_ini_file($filename, $process_sections, $scanner_mode);
    })(...$args);
}

function parse_ini_string(...$args)
{
    return curry('\parse_ini_string')(...$args);
}

function parse_ini_string2(...$args)
{
    return curry(function (bool $process_sections, string $ini) : array {
        return \parse_ini_string($ini, $process_sections);
    })(...$args);
}

function parse_ini_string3(...$args)
{
    return curry(function (int $scanner_mode, bool $process_sections, string $ini) : array {
        return \parse_ini_string($ini, $process_sections, $scanner_mode);
    })(...$args);
}

function pathinfo(...$args)
{
    return curry('\pathinfo')(...$args);
}

function pathinfo2(...$args)
{
    return curry(function (int $options, string $path) {
        return \pathinfo($path, $options);
    })(...$args);
}

function pclose(...$args)
{
    return curry('\pclose')(...$args);
}

function popen(...$args)
{
    return curry(function (string $mode, string $command) {
        return \popen($command, $mode);
    })(...$args);
}

function readfile(...$args)
{
    return curry('\readfile')(...$args);
}

function readfile2(...$args)
{
    return curry(function (bool $use_include_path, string $filename) : int {
        return \readfile($filename, $use_include_path);
    })(...$args);
}

function readfile3(...$args)
{
    return curry(function ($context, bool $use_include_path, string $filename) : int {
        return \readfile($filename, $use_include_path, $context);
    })(...$args);
}

function readlink(...$args)
{
    return curry('\readlink')(...$args);
}

function realpath(...$args)
{
    return curry('\realpath')(...$args);
}

function rename(...$args)
{
    return curry(function (string $newname, string $oldname) : bool {
        return \rename($oldname, $newname);
    })(...$args);
}

function rename3(...$args)
{
    return curry(function ($context, string $newname, string $oldname) : bool {
        return \rename($oldname, $newname, $context);
    })(...$args);
}

function rewind(...$args)
{
    return curry('\rewind')(...$args);
}

function rmdir(...$args)
{
    return curry('\rmdir')(...$args);
}

function rmdir2(...$args)
{
    return curry(function ($context, string $dirname) : bool {
        return \rmdir($dirname, $context);
    })(...$args);
}

function set_file_buffer(...$args)
{
    return curry(function (int $buffer, $stream) : int {
        return \set_file_buffer($stream, $buffer);
    })(...$args);
}

function stat(...$args)
{
    return curry('\stat')(...$args);
}

function symlink(...$args)
{
    return curry(function (string $link, string $target) : bool {
        return \symlink($target, $link);
    })(...$args);
}

function tempnam(...$args)
{
    return curry(function (string $prefix, string $dir) : string {
        return \tempnam($dir, $prefix);
    })(...$args);
}

function touch(...$args)
{
    return curry('\touch')(...$args);
}

function touch2(...$args)
{
    return curry(function (int $time, string $filename) : bool {
        return \touch($filename, $time);
    })(...$args);
}

function touch3(...$args)
{
    return curry(function (int $atime, int $time, string $filename) : bool {
        return \touch($filename, $time, $atime);
    })(...$args);
}

function umask1(...$args)
{
    return curry(function (int $mask) {
        return \umask($mask);
    })(...$args);
}

function unlink(...$args)
{
    return curry('\unlink')(...$args);
}

function unlink2(...$args)
{
    return curry(function ($context, string $filename) : bool {
        return \unlink($filename, $context);
    })(...$args);
}
