<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use function Phantasy\PHP\{
    curry,
    compose,
    explode,
    explode3,
    implode,
    implode1,
    addcslashes,
    addslashes,
    bin2hex,
    chop,
    chop2,
    chr,
    chunk_split,
    chunk_split2,
    chunk_split3,
    convert_cyr_string,
    convert_uudecode,
    convert_uuencode,
    count_chars,
    count_chars2,
    crc32,
    crypt,
    hex2bin,
    html_entity_decode,
    html_entity_decode2,
    html_entity_decode3,
    htmlentities,
    htmlentities2,
    htmlentities3,
    htmlentities4,
    htmlspecialchars_decode,
    htmlspecialchars_decode2,
    htmlspecialchars,
    htmlspecialchars2,
    htmlspecialchars3,
    htmlspecialchars4,
    join,
    lcfirst,
    levenshtein,
    levenshtein5,
    ltrim,
    ltrim2,
    md5_file,
    md5_file2,
    md5, md52,
    metaphone,
    metaphone2,
    money_format,
    nl_langinfo,
    nl2br,
    nl2br2,
    number_format,
    number_format2,
    number_format4,
    ord,
    parse_str,
    quotemeta,
    rtrim,
    rtrim2,
    sha1_file,
    sha1_file2,
    sha1,
    sha12,
    similar_text,
    similar_text_pct,
    soundex,
    str_getcsv,
    str_getcsv2,
    str_getcsv3,
    str_getcsv4,
    str_ireplace,
    str_ireplace_count,
    str_pad,
    str_pad3,
    str_pad4,
    str_repeat,
    str_replace,
    str_replace_count,
    str_rot13,
    str_shuffle,
    str_split,
    str_split2,
    str_word_count,
    str_word_count2,
    str_word_count3,
    strcasecmp,
    strchr,
    strchr3,
    strcmp,
    strcoll,
    strcspn,
    strcspn3,
    strcspn4,
    strip_tags,
    strip_tags2,
    stripcslashes,
    stripos,
    stripos3,
    stripslashes,
    stristr,
    stristr3,
    strlen,
    strnatcasecmp,
    strnatcmp,
    strncasecmp,
    strncmp,
    strpbrk,
    strpos,
    strpos3,
    strrchr,
    strrev,
    strripos,
    strripos3,
    strrpos,
    strrpos3,
    strspn,
    strspn3,
    strspn4,
    strstr,
    strstr3,
    strtok,
    strtok1,
    strtolower,
    strtoupper,
    strtr,
    substr_compare,
    substr_compare4,
    substr_compare5,
    substr_count,
    substr_count3,
    substr_count4,
    substr_replace,
    substr_replace4,
    substr,
    substr3,
    trim,
    trim2,
    ucfirst,
    ucwords,
    ucwords2,
    wordwrap,
    wordwrap2,
    wordwrap3,
    wordwrap4,
    array_change_key_case,
    array_change_key_case2,
    array_chunk,
    array_chunk3,
    array_column,
    array_column3,
    array_combine,
    array_count_values,
    array_diff_assoc,
    array_diff_key,
    array_diff_uassoc,
    array_diff_ukey,
    array_diff,
    array_fill_keys,
    array_fill,
    array_filter,
    array_filter2,
    array_filter3,
    array_flip,
    array_intersect_assoc,
    array_intersect_key,
    array_intersect_uassoc,
    array_intersect_ukey,
    array_intersect,
    array_key_exists,
    key_exists,
    array_keys,
    array_keys2,
    array_keys3,
    array_map,
    array_merge_recursive,
    array_merge,
    array_pad,
    array_product,
    array_rand,
    array_rand2,
    array_reduce,
    array_replace_recursive,
    array_replace,
    array_reverse,
    array_reverse2,
    array_search,
    array_search3,
    array_slice,
    array_slice3,
    array_slice4,
    array_sum,
    array_udiff_assoc,
    array_udiff_uassoc,
    array_udiff,
    array_uintersect,
    array_uintersect_assoc,
    array_uintersect_uassoc,
    array_unique,
    array_unique2,
    count,
    count2,
    sizeof,
    sizeof2,
    in_array,
    in_array3,
    range,
    range3,
    rsort,
    rsort2,
    krsort,
    krsort2,
    ksort,
    ksort2,
    natcasesort,
    natsort,
    arsort,
    arsort2,
    asort,
    asort2,
    sort,
    sort2,
    uasort,
    uksort,
    usort,
    array_push,
    array_pop,
    array_shift,
    array_unshift,
    array_splice,
    array_splice3,
    array_splice4,
    shuffle,
    checkdate,
    date_create_from_format,
    date_create_from_format3,
    date_create_immutable_from_format,
    date_create_immutable_from_format3,
    date_create_immutable1,
    date_create_immutable2,
    date_create1,
    date_create2,
    date_add,
    date_date_set,
    date_default_timezone_set,
    date_diff,
    date_diff3,
    date_format,
    date_interval_create_from_date_string,
    date_interval_format,
    date_isodate_set,
    date_isodate_set4,
    date_modify,
    date_offset_get,
    date_parse_from_format,
    date_parse,
    date_sub,
    date_sun_info,
    date_sunrise,
    date_sunrise2,
    date_sunset,
    date_sunset2,
    date_time_set,
    date_time_set4,
    date_timestamp_get,
    date_timestamp_set,
    date_timezone_get,
    date_timezone_set,
    date,
    date2,
    getdate1,
    gettimeofday1,
    gmdate,
    gmdate2,
    gmstrftime,
    gmstrftime2,
    idate,
    idate2,
    localtime1,
    localtime2,
    microtime1,
    strftime,
    strftime2,
    strptime,
    strtotime,
    strtotime2,
    timezone_identifiers_list1,
    timezone_identifiers_list2,
    timezone_location_get,
    timezone_name_from_abbr,
    timezone_name_from_abbr2,
    timezone_name_from_abbr3,
    timezone_name_get,
    timezone_offset_get,
    timezone_open,
    timezone_transitions_get,
    timezone_transitions_get2,
    timezone_transitions_get3,
    json_encode,
    json_encode2,
    json_encode3,
    json_decode,
    json_decode2,
    json_decode3,
    json_decode4,
    basename,
    basename2,
    chgrp,
    filegroup,
    chmod,
    chown,
    copy,
    copy3,
    dirname,
    dirname2,
    disk_free_space,
    diskfreespace,
    disk_total_space,
    fclose,
    feof,
    fflush,
    fgetc,
    fgetcsv,
    fgetcsv2,
    fgetcsv3,
    fgetcsv4,
    fgetcsv5,
    fgets,
    fgets2,
    fgetss,
    fgetss2,
    fgetss3,
    file_exists,
    file_get_contents,
    file_get_contents2,
    file_get_contents3,
    file_get_contents4,
    file_get_contents5,
    file_put_contents,
    file_put_contents3,
    file_put_contents4,
    file,
    file2,
    file3,
    fileatime,
    filectime,
    fileinode,
    filemtime,
    fileowner,
    fileperms,
    filesize,
    filetype,
    flock,
    fnmatch,
    fnmatch3,
    fopen,
    fopen3,
    fopen4,
    fpassthru,
    fputcsv,
    fputcsv3,
    fputcsv4,
    fputcsv5,
    fputs,
    fputs3,
    fread,
    fseek,
    fseek3,
    fstat,
    ftell,
    ftruncate,
    fwrite,
    fwrite3,
    glob,
    glob2,
    is_dir,
    is_executable,
    is_file,
    is_link,
    is_readable,
    is_uploaded_file,
    is_writable,
    is_writeable,
    lchgrp,
    lchown,
    link,
    linkinfo,
    lstat,
    mkdir,
    mkdir2,
    mkdir3,
    mkdir4,
    move_uploaded_file,
    parse_ini_file,
    parse_ini_file2,
    parse_ini_file3,
    parse_ini_string,
    parse_ini_string2,
    parse_ini_string3,
    pathinfo,
    pathinfo2,
    pclose,
    popen,
    readfile,
    readfile2,
    readfile3,
    readlink,
    realpath,
    rename,
    rename3,
    rewind,
    rmdir,
    rmdir2,
    set_file_buffer,
    stat,
    symlink,
    tempnam,
    touch,
    touch2,
    touch3,
    umask1,
    unlink,
    unlink2
};

class PHPFunctionsTest extends TestCase
{
    public function testJsonEncode3()
    {
        $a = ['a' => ['b' => '2'], 'd', 'e'];
        $this->assertFalse(json_encode3(1, JSON_NUMERIC_CHECK, $a));

        $jsonEncodeDepth10 = json_encode3(10);
        $jsonEncodeDepth10NumericCheck = $jsonEncodeDepth10(JSON_NUMERIC_CHECK);
        $this->assertEquals(
            $jsonEncodeDepth10NumericCheck($a),
            \json_encode($a, JSON_NUMERIC_CHECK, 10)
        );
    }

    public function testJsonDecode3()
    {
        $a = '{"a":{"b":2},"0":"d","1":"e"}';
        $this->assertNull(json_decode3(1, true, $a));

        $expected = ['a' => ['b' => '2'], 'd', 'e'];
        $this->assertEquals(json_decode3(10, true, $a), $expected);
    }

    public function testJsonDecode4()
    {
        $a = '{"a":{"b":2192381230129381029381023},"0":"d","1":"e"}';
        $expected = ['a' => ['b' => '2192381230129381029381023'], 'd', 'e'];
        $resFloat = json_decode4(0, 10, true, $a);
        $resString = json_decode4(JSON_BIGINT_AS_STRING, 10, true, $a);

        $this->assertEquals($resFloat, $expected);
        $this->assertEquals($resString, $expected);
        $this->assertTrue(is_float($resFloat['a']['b']));
        $this->assertFalse(is_float($resString['a']['b']));

        $decodeAsFloatLength10Assoc = json_decode4(0, 10, true);
        $decodeAsStringLength10Assoc = json_decode4(JSON_BIGINT_AS_STRING, 10, true);
        $resFloat2 = $decodeAsFloatLength10Assoc($a);
        $resString2 = $decodeAsStringLength10Assoc($a);

        $this->assertEquals($resFloat2, $expected);
        $this->assertEquals($resString2, $expected);
        $this->assertTrue(is_float($resFloat2['a']['b']));
        $this->assertFalse(is_float($resString2['a']['b']));
    }

    public function testChmod()
    {
        $file = \realpath(\dirname(__FILE__)) . '/fixtures/config.json';
        $this->assertTrue(chmod(777, $file));
        $this->assertEquals(chmod(777, $file), \chmod($file, 777));

        $chmod777 = chmod(777);
        $this->assertTrue($chmod777($file));
        $this->assertEquals($chmod777($file), \chmod($file, 777));
    }

    public function testChown()
    {
        $file = \realpath(\dirname(__FILE__)) . '/fixtures/config.json';
        $this->assertTrue(chown(\get_current_user(), $file));
        $this->assertEquals(chown(\get_current_user(), $file), \chown($file, \get_current_user()));

        $chownCurrentUser = chown(\get_current_user());
        $this->assertTrue($chownCurrentUser($file));
        $this->assertTrue($chownCurrentUser($file), \chown($file, get_current_user()));
    }

    public function testCopy()
    {
        $src = \realpath(\dirname(__FILE__)) . '/fixtures/config.json';
        $dest = \realpath(\dirname(__FILE__)) . '/fixtures/config_copy.json';

        $this->assertTrue(copy($src, $dest));
        $this->assertFileExists($dest);
        \unlink($dest);
    }

    public function testCopy3()
    {
        $streamContext = \stream_context_create();
        $src = \realpath(\dirname(__FILE__)) . '/fixtures/config.json';
        $dest = \realpath(\dirname(__FILE__)) . '/fixtures/config_copy.json';

        $this->assertTrue(copy3($streamContext, $src, $dest));
        $this->assertFileExists($dest);
        \unlink($dest);
    }

    public function testDirname()
    {
        $this->assertEquals(dirname(__FILE__), \dirname(__FILE__));

        $dirname = dirname();
        $this->assertEquals($dirname(__FILE__), \dirname(__FILE__));
    }

    public function testDirname2()
    {
        $this->assertEquals(dirname2(2, __FILE__), \dirname(__FILE__, 2));
        $dirname2LevelsUp = dirname2(2);
        $this->assertEquals($dirname2LevelsUp(__FILE__), \dirname(__FILE__, 2));
    }

    public function testDiskFreeSpace()
    {
        $dir = __DIR__;
        $this->assertEquals(disk_free_space($dir), \disk_free_space($dir));
        $disk_free_space = disk_free_space();
        $this->assertEquals($disk_free_space($dir), \disk_free_space($dir));
    }

    public function testDiskFreeSpaceNoUnderscores()
    {
        $dir = __DIR__;
        $this->assertEquals(diskfreespace($dir), \diskfreespace($dir));
        $diskfreespace = diskfreespace();
        $this->assertEquals($diskfreespace($dir), \diskfreespace($dir));
    }

    public function testDiskTotalSpace()
    {
        $dir = __DIR__;
        $this->assertEquals(disk_total_space($dir), \disk_total_space($dir));
        $disk_total_space = disk_total_space();
        $this->assertEquals($disk_total_space($dir), \disk_total_space($dir));
    }

    public function testFclose()
    {
        $path = \realpath(\dirname(__FILE__)) . '/fixtures/config.json';
        $handle = \fopen($path, 'r');
        $this->assertTrue(fclose($handle));

        $handle2 = \fopen($path, 'r');
        $fclose = fclose();
        $this->assertTrue($fclose($handle2));
    }

    public function testFeof()
    {
        $path = \realpath(\dirname(__FILE__)) . '/fixtures/config.json';
        $handle = \fopen($path, 'r');
        $this->assertFalse(feof($handle));
        $this->assertEquals(feof($handle), \feof($handle));

        $feof = feof();
        $this->assertFalse($feof($handle));
        $this->assertEquals($feof($handle), \feof($handle));
        \fclose($handle);
    }

    public function testFflush()
    {
        $fflush = fflush();
        $path = \realpath(\dirname(__FILE__)) . '/fixtures/config.json';
        $handle = \fopen($path, 'r');
        $this->assertTrue(fflush($handle));
        \fclose($handle);

        $handle = \fopen($path, 'r');
        $this->assertTrue($fflush($handle));
        \fclose($handle);
    }

    public function testFgetc()
    {
        $fgetc = fgetc();
        $path = \realpath(\dirname(__FILE__)) . '/fixtures/config.json';
        $handle = \fopen($path, 'r');
        $this->assertEquals(fgetc($handle), "{");
        \fclose($handle);

        $handle = \fopen($path, 'r');
        $this->assertEquals($fgetc($handle), "{");
        \fclose($handle);
    }

    public function testFgetcsv()
    {
        $path = \realpath(\dirname(__FILE__)) . '/fixtures/test.csv';
        $handle = \fopen($path, 'r');
        $this->assertEquals(fgetcsv($handle), ['Foo', 'foo@example.com', '1234', 'foo,bar', 'baz"', '-a', 'b-']);
        \fclose($handle);

        $fgetcsv = fgetcsv();
        $handle = \fopen($path, 'r');
        $this->assertEquals(fgetcsv($handle), ['Foo', 'foo@example.com', '1234', 'foo,bar', 'baz"', '-a', 'b-']);
        \fclose($handle);
    }

    public function testFgetcsv2()
    {
        $path = \realpath(\dirname(__FILE__)) . '/fixtures/test.csv';
        $handle = \fopen($path, 'r');
        $this->assertEquals(fgetcsv2(10, $handle), ['Foo', 'foo@ex']);
        \fclose($handle);

        $fgetcsvLength10 = fgetcsv2(10);
        $handle = \fopen($path, 'r');
        $this->assertEquals($fgetcsvLength10($handle), ['Foo', 'foo@ex']);
        \fclose($handle);
    }

    public function testFgetcsv3()
    {
        $path = \realpath(\dirname(__FILE__)) . '/fixtures/test.csv';
        $handle = \fopen($path, 'r');
        $this->assertEquals(fgetcsv3('@', 10, $handle), ['Foo,foo', 'ex']);
        \fclose($handle);

        $fgetcsvLength10AtSep = fgetcsv3('@', 10);
        $handle = \fopen($path, 'r');
        $this->assertEquals($fgetcsvLength10AtSep($handle), ['Foo,foo', 'ex']);
        \fclose($handle);
    }

    public function testFgetcsv4()
    {
        $path = \realpath(\dirname(__FILE__)) . '/fixtures/test.csv';
        $handle = \fopen($path, 'r');
        $this->assertEquals(fgetcsv4('-', ',', 50, $handle), ['Foo', 'foo@example.com', '1234', '"foo', '"bar', 'baz"', 'a,b']);
        \fclose($handle);

        $fgetcsvLength10DashEnclose = fgetcsv4('-', ',', 50);
        $handle = \fopen($path, 'r');
        $this->assertEquals(
            $fgetcsvLength10DashEnclose($handle),
            ['Foo', 'foo@example.com', '1234', '"foo', '"bar', 'baz"', 'a,b']
        );
         \fclose($handle);
    }

    public function testFgetcsv5()
    {
        $path = \realpath(\dirname(__FILE__)) . '/fixtures/test.csv';
        $handle = \fopen($path, 'r');
        $this->assertEquals(
            fgetcsv5('"', '-', ',', 50, $handle),
            ['Foo', 'foo@example.com', '1234', '"foo', '"bar', 'baz"', 'a,b']
        );
        \fclose($handle);

        $fgetcsvLength10DashEnclose = fgetcsv5('"', '-', ',', 50);
        $handle = \fopen($path, 'r');
        $this->assertEquals(
            $fgetcsvLength10DashEnclose($handle),
            ['Foo', 'foo@example.com', '1234', '"foo', '"bar', 'baz"', 'a,b']
        );
         \fclose($handle);
    }

    public function testFgets()
    {
        $path = \realpath(\dirname(__FILE__)) . '/fixtures/test.csv';
        $handle = \fopen($path, 'r');
        $this->assertEquals(
            fgets($handle),
            "Foo,foo@example.com,1234,\"foo,\"bar,baz\",-a,b-\n"
        );
        \fclose($handle);

        $fgets = fgets();
        $handle = \fopen($path, 'r');
        $this->assertEquals(
            $fgets($handle),
            "Foo,foo@example.com,1234,\"foo,\"bar,baz\",-a,b-\n"
        );
        \fclose($handle);
    }

    public function testFgets2()
    {
        $path = \realpath(\dirname(__FILE__)) . '/fixtures/test.csv';
        $handle = \fopen($path, 'r');
        $this->assertEquals(
            fgets2(10, $handle),
            "Foo,foo@e"
        );
        \fclose($handle);

        $handle = \fopen($path, 'r');
        $get10 = fgets2(10);
        $this->assertEquals(
            $get10($handle),
            "Foo,foo@e"
        );
        \fclose($handle);
    }

    public function testFgetss()
    {
        $path = \realpath(\dirname(__FILE__)) . '/fixtures/test2.csv';
        $fh = \fopen($path, 'a+');
        \fwrite($fh, '<div>Test</div>,foo,bar,<span>Test</span>');
        \fclose($fh);

        $fh = \fopen($path, 'r');
        $content = fgetss($fh);
        \fclose($fh);

        $fgetss = fgetss();
        $fh = \fopen($path, 'r');
        $content2 = $fgetss($fh);
        \fclose($fh);

        \unlink($path);

        $this->assertEquals($content, 'Test,foo,bar,Test');
        $this->assertEquals($content2, 'Test,foo,bar,Test');
    }

    public function testFgetss2()
    {
        $path = \realpath(\dirname(__FILE__)) . '/fixtures/test2.csv';
        $fh = \fopen($path, 'a+');
        \fwrite($fh, '<div>Test</div>,foo,bar,<span>Test</span>');
        \fclose($fh);

        $fh = \fopen($path, 'r');
        $content = fgetss2(24, $fh);
        \fclose($fh);

        $get24 = fgetss2(24);
        $fh = \fopen($path, 'r');
        $content2 = $get24($fh);
        \fclose($fh);

        \unlink($path);

        $this->assertEquals($content, 'Test,foo,bar');
        $this->assertEquals($content2, 'Test,foo,bar');
    }

    public function testFgetss3()
    {
        $path = \realpath(\dirname(__FILE__)) . '/fixtures/test2.csv';
        $fh = \fopen($path, 'a+');
        \fwrite($fh, '<div>Test</div>,foo,bar,<span>Test</span>');
        \fclose($fh);

        $fh = \fopen($path, 'r');
        $content = fgetss3('<span>', 4096, $fh);
        \fclose($fh);

        $keepSpan = fgetss3('<span>', 4096);
        $fh = \fopen($path, 'r');
        $content = $keepSpan($fh);
        \fclose($fh);
        \unlink($path);

        $this->assertEquals($content, 'Test,foo,bar,<span>Test</span>');
    }

    public function testFileExists()
    {
        $path = \dirname(__FILE__) . '/fixtures/config.json';
        $path2 = \dirname(__FILE__) . '/fixtures/config2.json';

        $this->assertTrue(file_exists($path));
        $this->assertFalse(!file_exists($path));

        $fileExists = file_exists();
        $this->assertTrue($fileExists($path));
        $this->assertFalse(!$fileExists($path));
    }

    public function testFileGetContents()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $expected = "Foo,foo@example.com,1234,\"foo,\"bar,baz\",-a,b-\nBar,bar@example.com,5678,\"foo,\"bar,baz\",-b,c-";
        $this->assertEquals(
            file_get_contents($path),
            $expected
        );

        $fileGetContents = file_get_contents();
        $this->assertEquals(
            $fileGetContents($path),
            $expected
        );
    }

    public function testFileGetContents2()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $expected = "Foo,foo@example.com,1234,\"foo,\"bar,baz\",-a,b-\nBar,bar@example.com,5678,\"foo,\"bar,baz\",-b,c-";
        $this->assertEquals(
            file_get_contents2(true, $path),
            $expected
        );

        $fileGetContents = file_get_contents2(true);
        $this->assertEquals(
            $fileGetContents($path),
            $expected
        );
    }

    public function testFileGetContents3()
    {
        $context = \stream_context_create();
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $expected = "Foo,foo@example.com,1234,\"foo,\"bar,baz\",-a,b-\nBar,bar@example.com,5678,\"foo,\"bar,baz\",-b,c-";
        $this->assertEquals(
            file_get_contents3($context, false, $path),
            $expected
        );

        $fileGetContents = file_get_contents3($context, false);
        $this->assertEquals(
            $fileGetContents($path),
            $expected
        );
    }

    public function testFileGetContents4()
    {
        $context = \stream_context_create();
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $expected = "oo@example.com,1234,\"foo,\"bar,baz\",-a,b-\nBar,bar@example.com,5678,\"foo,\"bar,baz\",-b,c-";
        $this->assertEquals(
            file_get_contents4(5, $context, false, $path),
            $expected
        );

        $fileGetContents = file_get_contents4(5, $context, false);
        $this->assertEquals(
            $fileGetContents($path),
            $expected
        );
    }

    public function testFileGetContents5()
    {
        $context = \stream_context_create();
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $expected = "oo@example.com";
        $this->assertEquals(
            file_get_contents5(14, 5, $context, false, $path),
            $expected
        );

        $fileGetContents = file_get_contents5(14, 5, $context, false);
        $this->assertEquals(
            $fileGetContents($path),
            $expected
        );
    }

    public function testFilePutContents()
    {
        $path = \dirname(__FILE__) . '/fixtures/test2.csv';
        file_put_contents('FooBar', $path);
        $contents = \file_get_contents($path);

        $putBarQuux = file_put_contents('BarQuux');
        $putBarQuux($path);
        $contents_ = \file_get_contents($path);

        \unlink($path);

        $this->assertEquals(
            $contents,
            'FooBar'
        );
        $this->assertEquals(
            $contents_,
            'BarQuux'
        );
    }

    public function testFilePutContents3()
    {
        $path = \dirname(__FILE__) . '/fixtures/test2.csv';
        file_put_contents3(FILE_APPEND, 'FooBar', $path);
        $contents = \file_get_contents($path);

        $putContentsAppend = file_put_contents3(FILE_APPEND, 'BarQuux');
        $putContentsAppend($path);
        $contents_ = \file_get_contents($path);

        \unlink($path);
        $this->assertEquals(
            $contents,
            'FooBar'
        );

        $this->assertEquals(
            $contents_,
            'FooBarBarQuux'
        );
    }

    public function testFilePutContents4()
    {
        $context = \stream_context_create();
        $path = \dirname(__FILE__) . '/fixtures/test2.csv';
        file_put_contents4($context, FILE_APPEND, 'FooBar', $path);
        $contents = \file_get_contents($path);

        $putContentsAppend = file_put_contents4($context, FILE_APPEND, 'BarQuux');
        $putContentsAppend($path);
        $contents_ = \file_get_contents($path);
        \unlink($path);

        $this->assertEquals(
            $contents,
            'FooBar'
        );
        $this->assertEquals(
            $contents_,
            'FooBarBarQuux'
        );
    }

    public function testFile()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $expected = [
            "Foo,foo@example.com,1234,\"foo,\"bar,baz\",-a,b-\n",
            "Bar,bar@example.com,5678,\"foo,\"bar,baz\",-b,c-",
        ];
        $this->assertEquals(
            file($path),
            $expected
        );

        $file = file();
        $this->assertEquals(
            $file($path),
            $expected
        );
    }

    public function testFile2()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $expected = [
            "Foo,foo@example.com,1234,\"foo,\"bar,baz\",-a,b-",
            "Bar,bar@example.com,5678,\"foo,\"bar,baz\",-b,c-",
        ];
        $this->assertEquals(
            file2(FILE_IGNORE_NEW_LINES, $path),
            $expected
        );

        $file = file2(FILE_IGNORE_NEW_LINES);
        $this->assertEquals(
            $file($path),
            $expected
        );
    }

    public function testFile3()
    {
        $ctx = \stream_context_create();
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $expected = [
            "Foo,foo@example.com,1234,\"foo,\"bar,baz\",-a,b-",
            "Bar,bar@example.com,5678,\"foo,\"bar,baz\",-b,c-",
        ];
        $this->assertEquals(
            file3($ctx, FILE_IGNORE_NEW_LINES, $path),
            $expected
        );

        $file = file3($ctx, FILE_IGNORE_NEW_LINES);
        $this->assertEquals(
            $file($path),
            $expected
        );
    }

    public function testFileatime()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $this->assertEquals(
            fileatime($path),
            \fileatime($path)
        );

        $fileatime = fileatime();
        $this->assertEquals(
            $fileatime($path),
            \fileatime($path)
        );
    }

    public function testFilectime()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $this->assertEquals(
            filectime($path),
            \filectime($path)
        );

        $filectime = filectime();
        $this->assertEquals(
            $filectime($path),
            \filectime($path)
        );
    }

    public function testFilemtime()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $this->assertEquals(
            filemtime($path),
            \filemtime($path)
        );

        $filemtime = filemtime();
        $this->assertEquals(
            $filemtime($path),
            \filemtime($path)
        );
    }

    public function testFilegroup()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $this->assertEquals(
            filegroup($path),
            \filegroup($path)
        );

        $filegroup = filegroup();
        $this->assertEquals(
            $filegroup($path),
            \filegroup($path)
        );
    }

    public function testFileinode()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $this->assertEquals(
            fileinode($path),
            \fileinode($path)
        );

        $fileinode = fileinode();
        $this->assertEquals(
            $fileinode($path),
            \fileinode($path)
        );
    }

    public function testFileowner()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $this->assertEquals(
            fileowner($path),
            \fileowner($path)
        );

        $fileowner = fileowner();
        $this->assertEquals(
            $fileowner($path),
            \fileowner($path)
        );
    }

    public function testFileperms()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $this->assertEquals(
            fileperms($path),
            \fileperms($path)
        );

        $fileperms = fileperms();
        $this->assertEquals(
            $fileperms($path),
            \fileperms($path)
        );
    }

    public function testFilesize()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $this->assertEquals(
            filesize($path),
            \filesize($path)
        );

        $filesize = filesize();
        $this->assertEquals(
            $filesize($path),
            \filesize($path)
        );
    }

    public function testFiletype()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $this->assertEquals(
            filetype($path),
            \filetype($path)
        );

        $filetype = filetype();
        $this->assertEquals(
            $filetype($path),
            \filetype($path)
        );
    }

    public function testFlock()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $fh = \fopen($path, 'r');
        $this->assertTrue(flock(LOCK_SH, $fh));
        $this->assertTrue(flock(LOCK_UN, $fh));

        $sharedLock = flock(LOCK_SH);
        $unlock = flock(LOCK_UN);
        $this->assertTrue($sharedLock($fh));
        $this->assertTrue($unlock($fh));
    }

    public function testFnmatch()
    {
        $color = 'lightgray';
        $pattern = "*gr[ae]y";
        $this->assertTrue(fnmatch($pattern, $color));
        $matchGray = fnmatch($pattern);
        $this->assertTrue($matchGray($color));
    }

    public function testFnmatch3()
    {
        $pattern = "/*/bar";
        $path = "/foo/bar";
        $this->assertTrue(fnmatch3(FNM_PATHNAME, $pattern, $path));
        $matchSlashBar = fnmatch3(FNM_PATHNAME, $pattern);
        $this->assertTrue($matchSlashBar($path));
    }

    public function testFopen()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $fh = fopen('r', $path);
        $this->assertTrue(\is_resource($fh));
        \fclose($fh);
        $readOpen = fopen('r');
        $fh = $readOpen($path);
        $this->assertTrue(\is_resource($fh));
        \fclose($fh);
    }

    public function testFopen3()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $fh = fopen3(false, 'r', $path);
        $this->assertTrue(\is_resource($fh));
        \fclose($fh);
        $readOpen = fopen3(false, 'r');
        $fh = $readOpen($path);
        $this->assertTrue(\is_resource($fh));
        \fclose($fh);
    }

    public function testFopen4()
    {
        $ctx = \stream_context_create();
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $fh = fopen4($ctx, false, 'r', $path);
        $this->assertTrue(\is_resource($fh));
        \fclose($fh);
        $readOpen = fopen4($ctx, false, 'r');
        $fh = $readOpen($path);
        $this->assertTrue(\is_resource($fh));
        \fclose($fh);
    }

    public function testFpassthru()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $fh = \fopen($path, 'r');
        ob_start();
        $a = fpassthru($fh);
        $contents = ob_get_contents();
        ob_end_clean();
        \fclose($fh);

        $fpassthru = fpassthru();
        $fh = \fopen($path, 'r');
        ob_start();
        $a_ = $fpassthru($fh);
        $contents_ = ob_get_contents();
        ob_end_clean();
        \fclose($fh);

        $this->assertEquals($a, $a_);
        $this->assertEquals($contents, $contents_);
    }

    public function testFputcsv()
    {
        $path = \dirname(__FILE__) . '/fixtures/test2.csv';

        $fh = \fopen($path, 'a+');
        $putcsv = fputcsv($fh);
        fputcsv($fh, ['a','b','c']);
        $putcsv(['foo','bar','baz']);
        \fclose($fh);
        $contents = \file_get_contents($path);
        \unlink($path);

        $this->assertEquals(
            $contents,
            "a,b,c\nfoo,bar,baz\n"
        );
    }

    public function testFputcsv3()
    {
        $path = \dirname(__FILE__) . '/fixtures/test2.csv';

        $fh = \fopen($path, 'a+');
        $putcsv = fputcsv3('-', $fh);
        fputcsv3('-', $fh, ['a','b','c']);
        $putcsv(['foo','bar','baz']);
        \fclose($fh);

        $contents = \file_get_contents($path);
        \unlink($path);

        $this->assertEquals(
            $contents,
            "a-b-c\nfoo-bar-baz\n"
        );
    }

    public function testFputcsv4()
    {
        $path = \dirname(__FILE__) . '/fixtures/test2.csv';

        $fh = \fopen($path, 'a+');
        $putcsv = fputcsv4('*', '-', $fh);
        fputcsv4('*', '-', $fh, ['foo','foo-bar']);
        $putcsv(['bar','bar-baz']);
        \fclose($fh);

        $contents = \file_get_contents($path);
        \unlink($path);

        $this->assertEquals(
            $contents,
            "foo-*foo-bar*\nbar-*bar-baz*\n"
        );
    }

    public function testFputcsv5()
    {
        $path = \dirname(__FILE__) . '/fixtures/test2.csv';

        $fh = \fopen($path, 'a+');
        $putcsv = fputcsv5('\\', '*', '-', $fh);
        fputcsv5('\\', '*', '-', $fh, ['foo','foo-bar']);
        $putcsv(['bar','bar-baz']);
        \fclose($fh);

        $contents = \file_get_contents($path);
        \unlink($path);

        $this->assertEquals(
            $contents,
            "foo-*foo-bar*\nbar-*bar-baz*\n"
        );
    }

    public function testFputs()
    {
        $path = \dirname(__FILE__) . '/fixtures/test2.csv';

        $fh = \fopen($path, 'a+');
        $puts = fputs($fh);
        fputs($fh, 'foo');
        $puts('bar');
        \fclose($fh);

        $contents = \file_get_contents($path);
        \unlink($path);

        $this->assertEquals(
            $contents,
            'foobar'
        );
    }

    public function testFputs3()
    {
        $path = \dirname(__FILE__) . '/fixtures/test2.csv';

        $fh = \fopen($path, 'a+');
        $puts = fputs3(2, $fh);
        fputs3(2, $fh, 'foo');
        $puts('bar');
        \fclose($fh);

        $contents = \file_get_contents($path);
        \unlink($path);

        $this->assertEquals(
            $contents,
            'foba'
        );
    }

    public function testFread()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $fh = \fopen($path, 'r');
        $contents = fread(3, $fh);
        \fclose($fh);

        $this->assertEquals(
            $contents,
            'Foo'
        );
    }

    public function testFseek()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $fh = \fopen($path, 'r');
        $contents = \fgets($fh);
        fseek(0, $fh);
        $contents2 = \fgets($fh);
        \fclose($fh);

        $rewind = fseek(0);
        $fh = \fopen($path, 'r');
        $contents = \fgets($fh);
        $rewind($fh);
        $contents2 = \fgets($fh);
        \fclose($fh);
        $this->assertEquals($contents, $contents2);
    }

    public function testFseek3()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $fh = \fopen($path, 'r');
        $contents = \fgets($fh);
        fseek3(SEEK_SET, 0, $fh);
        $contents2 = \fgets($fh);
        \fclose($fh);
        $this->assertEquals($contents, $contents2);

        $rewind = fseek3(SEEK_SET, 0);
        $fh = \fopen($path, 'r');
        $contents = \fgets($fh);
        $rewind($fh);
        $contents2 = \fgets($fh);
        \fclose($fh);
        $this->assertEquals($contents, $contents2);
    }

    public function testFstat()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';

        $fstat = fstat();
        $fh = \fopen($path, 'r');
        $stats = fstat($fh);
        $stats2 = $fstat($fh);
        \fclose($fh);

        $this->assertEquals($stats, $stats2);
    }

    public function testFtell()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';

        $ftell = ftell();
        $fh = \fopen($path, 'r');
        $tell = ftell($fh);
        $tell2 = $ftell($fh);
        \fclose($fh);

        $this->assertEquals($tell, $tell2);
    }

    public function testFtruncate()
    {
        $path = \dirname(__FILE__) . '/fixtures/test2.csv';
        $fh = \fopen($path, 'a+');
        \fwrite($fh, 'Foo bar');
        $contentsBefore = \file_get_contents($path);
        ftruncate(0, $fh);
        $contentsAfter = \file_get_contents($path);
        \fclose($fh);

        $this->assertEquals($contentsBefore, 'Foo bar');
        $this->assertEquals($contentsAfter, '');
        $this->assertEquals(\file_get_contents($path), '');
        \unlink($path);
    }

    public function testFwrite()
    {
        $path = \dirname(__FILE__) . '/fixtures/test2.csv';

        $fh = \fopen($path, 'a+');
        $puts = fwrite($fh);
        fwrite($fh, 'foo');
        $puts('bar');
        \fclose($fh);

        $contents = \file_get_contents($path);
        \unlink($path);

        $this->assertEquals(
            $contents,
            'foobar'
        );
    }

    public function testFwrite3()
    {
        $path = \dirname(__FILE__) . '/fixtures/test2.csv';

        $fh = \fopen($path, 'a+');
        $puts = fwrite3(2, $fh);
        fwrite3(2, $fh, 'foo');
        $puts('bar');
        \fclose($fh);

        $contents = \file_get_contents($path);
        \unlink($path);

        $this->assertEquals(
            $contents,
            'foba'
        );
    }

    public function testGlob()
    {
        $path = \dirname(__FILE__) . '/fixtures';
        $csvs = glob($path . '/*.csv');

        $glob = glob();
        $json = $glob($path . '/*.json');
        $this->assertEquals(
            $csvs,
            [$path . '/test.csv']
        );
        $this->assertEquals(
            $json,
            [$path . '/config.json']
        );
    }

    public function testGlob2()
    {
        $dir = \dirname(__FILE__);
        $dirs = glob2(GLOB_ONLYDIR, $dir . '/*');

        $glob = glob2(GLOB_ONLYDIR);
        $dirs_ = $glob($dir . '/*');
        $this->assertEquals(
            $dirs,
            [$dir . '/fixtures']
        );
        $this->assertEquals(
            $dirs_,
            [$dir . '/fixtures']
        );
    }

    public function testIsDir()
    {
        $path = \dirname(__FILE__) . '/fixtures';
        $is_dir = is_dir();
        $this->assertTrue(is_dir($path));
        $this->assertTrue($is_dir($path));

        $this->assertFalse(is_dir($path . '/config.json'));
        $this->assertFalse($is_dir($path . '/config.json'));
    }

    public function testIsExecutable()
    {
        $path = \dirname(__FILE__) . '/fixtures';
        $is_executable = is_executable();
        $this->assertTrue(is_executable($path . '/test.sh'));
        $this->assertTrue($is_executable($path . '/test.sh'));
        $this->assertFalse(is_executable($path . '/test.csv'));
        $this->assertFalse($is_executable($path . '/test.csv'));
    }

    public function testIsFile()
    {
        $path = \dirname(__FILE__) . '/fixtures';
        $is_file = is_file();
        $this->assertTrue(is_file($path . '/test.csv'));
        $this->assertTrue($is_file($path . '/test.csv'));
        $this->assertFalse(is_file($path));
        $this->assertFalse($is_file($path));
    }

    public function testIsLink()
    {
        $path = \dirname(__FILE__) . '/fixtures';
        $is_link = is_link();
        $file = $path . '/test2.csv';
        $sym = $path . '/tests';
        \touch($file);
        \symlink($file, $sym);

        $a = is_link($sym);
        $a_ = $is_link($file);
        \unlink($sym);
        \unlink($file);

        $this->assertTrue($a);
        $this->assertFalse($a_);
    }

    public function testIsReadable()
    {
        $path = \dirname(__FILE__) . '/fixtures';
        $is_readable = is_readable();
        $this->assertTrue($is_readable($path . '/test.csv'));
        $this->assertFalse(is_readable('php://stdin'));
    }

    public function testIsUploadedFile()
    {
        $path = \dirname(__FILE__) . '/fixtures';
        $is_uploaded_file = is_uploaded_file();
        $this->assertFalse(is_uploaded_file($path . '/test.csv'));
        $this->assertFalse($is_uploaded_file($path . '/test.csv'));
    }

    public function testIsWritable()
    {
        $path = \dirname(__FILE__) . '/fixtures';
        $is_writable = is_writable();
        $this->assertTrue(is_writable($path . '/test.csv'));
        $this->assertTrue($is_writable($path . '/test.csv'));
    }

    public function testIsWriteable()
    {
        $path = \dirname(__FILE__) . '/fixtures';
        $is_writeable = is_writeable();
        $this->assertTrue(is_writeable($path . '/test.csv'));
        $this->assertTrue($is_writeable($path . '/test.csv'));
    }

    public function testLchgrp()
    {
        $path = dirname(__FILE__) . '/fixtures';
        $file = $path . '/test2.csv';
        $sym = $path . '/tests';
        \touch($file);
        \symlink($file, $sym);
        $lchgrp = lchgrp(\filegroup($sym));

        $res = lchgrp(\filegroup($sym), $sym);
        $res_ = $lchgrp($sym);
        \unlink($file);
        \unlink($sym);

        $this->assertTrue($res);
        $this->assertTrue($res_);
    }

    public function testLchown()
    {
        $path = dirname(__FILE__) . '/fixtures';
        $file = $path . '/test2.csv';
        $sym = $path . '/tests';
        \touch($file);
        \symlink($file, $sym);
        $lchown = lchown(\fileowner($sym));

        $res = lchown(\fileowner($sym), $sym);
        $res_ = $lchown($sym);
        \unlink($file);
        \unlink($sym);

        $this->assertTrue($res);
        $this->assertTrue($res_);
    }

    public function testLink()
    {
        $src = '/tmp/foo';
        $link = '/tmp/bar';

        $src2 = '/tmp/baz';
        $link2 = '/tmp/quux';

        \touch($src);
        \touch($src2);
        $linkToBar = link($link);
        $linkToBar($src);

        link($link2, $src2);

        $res = \file_exists($link);
        $res2 = \file_exists($src);
        $res3 = \file_exists($link2);
        $res4 = \file_exists($src2);

        \unlink($src);
        \unlink($link);
        \unlink($link2);
        \unlink($src2);

        $this->assertTrue($res);
        $this->assertTrue($res2);
        $this->assertTrue($res3);
        $this->assertTrue($res4);
    }

    public function testLinkinfo()
    {
        $src = '/tmp/foo';
        $link = '/tmp/bar';

        \touch($src);
        \link($src, $link);
        $linkinfo = linkinfo();
        $info = linkinfo($link);
        $info2 = $linkinfo($link);

        \unlink($src);
        \unlink($link);

        $this->assertEquals($info, $info2);
        $this->assertNotEquals($info, 0);
        $this->assertNotEquals($info, false);
    }

    public function testLstat()
    {
        $path = \dirname(__FILE__) . '/fixtures/test.csv';
        $lstat = lstat();
        $this->assertEquals(lstat($path), $lstat($path));
    }

    public function testMkdir()
    {
        $path = \dirname(__FILE__) . '/fixtures/';
        $dir = $path . 'foo/';

        $mkdir = mkdir();
        mkdir($dir);
        $exists = \is_dir($dir);
        \rmdir($dir);

        $mkdir($dir);
        $exists2 = \is_dir($dir);
        \rmdir($dir);

        $this->assertTrue($exists);
        $this->assertTrue($exists2);
        $this->assertFalse(\is_dir($dir));
    }

    public function testMkdir2()
    {
        $path = \dirname(__FILE__) . '/fixtures/';
        $dir = $path . 'foo/';
        $dir2 = $path . 'bar/';
        mkdir2(0700, $dir);
        $exists = \is_dir($dir);
        \rmdir($dir);

        $mkdir700 = mkdir2(0700);
        $mkdir700($dir2);
        $exists2 = \is_dir($dir2);
        \rmdir($dir2);
        $this->assertTrue($exists);
        $this->assertFalse(\is_dir($dir));
        $this->assertTrue($exists2);
        $this->assertFalse(\is_dir($dir2));
    }

    public function testMkdir3()
    {
        $path = \dirname(__FILE__) . '/fixtures/';
        $dir = $path . 'foo/bar/baz/';
        mkdir3(true, 0700, $dir);
        $exists = \is_dir($dir);
        \rmdir($dir);
        \rmdir($path . 'foo/bar/');
        \rmdir($path . 'foo/');

        $mkdirRecursive700 = mkdir3(true, 0700);
        $mkdirRecursive700($dir);
        $exists2 = \is_dir($dir);
        \rmdir($dir);
        \rmdir($path . 'foo/bar/');
        \rmdir($path . 'foo/');
        $this->assertTrue($exists);
        $this->assertTrue($exists2);
        $this->assertFalse(\is_dir($dir));
        $this->assertFalse(\is_dir('foo/bar/'));
        $this->assertFalse(\is_dir('foo/'));
    }

    public function testMkdir4()
    {
        $ctx = \stream_context_create();
        $path = \dirname(__FILE__) . '/fixtures/';
        $dir = $path . 'foo/bar/baz/';
        mkdir4($ctx, true, 0700, $dir);
        $exists = \is_dir($dir);
        \rmdir($dir);
        \rmdir($path . 'foo/bar/');
        \rmdir($path . 'foo/');

        $mkdirRecursive700 = mkdir4($ctx, true, 0700);
        $mkdirRecursive700($dir);
        $exists2 = \is_dir($dir);
        \rmdir($dir);
        \rmdir($path . 'foo/bar/');
        \rmdir($path . 'foo/');
        $this->assertTrue($exists);
        $this->assertTrue($exists2);
        $this->assertFalse(\is_dir($dir));
        $this->assertFalse(\is_dir('foo/bar/'));
        $this->assertFalse(\is_dir('foo/'));
    }

    public function testMoveUploadedFile()
    {
        $path = \dirname(__FILE__) . '/fixtures/';

        $this->assertFalse(move_uploaded_file($path . '../', $path . 'test.csv'));
        $moveUp = move_uploaded_file($path . '../');
        $this->assertFalse($moveUp('test.csv'));
    }

    public function testParseIniFile()
    {
        $path = \dirname(__FILE__) . '/fixtures/sample.ini';
        $expected = [
            'one' => '1',
            'five' => '5',
            'animal' => 'BIRD',
            'path' => '/usr/local/bin',
            'URL' => 'http://www.example.com/~username',
            'phpversion' => [ '5.0', '5.1', '5.2', '5.3' ],
            'urls' => [
                'svn' => 'http://svn.php.net',
                'git' => 'http://git.php.net'
            ]
        ];
        $this->assertEquals(
            parse_ini_file($path),
            $expected
        );
        $parseIni = parse_ini_file();
        $this->assertEquals(
            $parseIni($path),
            $expected
        );
    }

    public function testParseIniFile2()
    {
        $path = \dirname(__FILE__) . '/fixtures/sample.ini';
        $expected = [
            'first_section' => [
                'one' => '1',
                'five' => '5',
                'animal' => 'BIRD',
            ],
            'second_section' => [
                'path' => '/usr/local/bin',
                'URL' => 'http://www.example.com/~username',
            ],
            'third_section' => [
                'phpversion' => [ '5.0', '5.1', '5.2', '5.3' ],
                'urls' => [
                    'svn' => 'http://svn.php.net',
                    'git' => 'http://git.php.net'
                ]
            ]
        ];
        $this->assertEquals(
            parse_ini_file2(true, $path),
            $expected
        );
        $parseIni = parse_ini_file2(true);
        $this->assertEquals(
            $parseIni($path),
            $expected
        );
    }

    public function testParseIniFile3()
    {
        $path = \dirname(__FILE__) . '/fixtures/sample.ini';
        $expected = [
            'first_section' => [
                'one' => 1,
                'five' => 5,
                'animal' => 'BIRD',
            ],
            'second_section' => [
                'path' => '/usr/local/bin',
                'URL' => 'http://www.example.com/~username',
            ],
            'third_section' => [
                'phpversion' => [ '5.0', '5.1', '5.2', '5.3' ],
                'urls' => [
                    'svn' => 'http://svn.php.net',
                    'git' => 'http://git.php.net'
                ]
            ]
        ];
        $this->assertEquals(
            parse_ini_file3(INI_SCANNER_TYPED, true, $path),
            $expected
        );
        $parseIni = parse_ini_file3(INI_SCANNER_TYPED, true);
        $this->assertEquals(
            $parseIni($path),
            $expected
        );
    }

    public function testParseIniString()
    {
        $path = \dirname(__FILE__) . '/fixtures/sample.ini';
        $expected = [
            'one' => '1',
            'five' => '5',
            'animal' => 'BIRD',
            'path' => '/usr/local/bin',
            'URL' => 'http://www.example.com/~username',
            'phpversion' => [ '5.0', '5.1', '5.2', '5.3' ],
            'urls' => [
                'svn' => 'http://svn.php.net',
                'git' => 'http://git.php.net'
            ]
        ];
        $this->assertEquals(
            parse_ini_string(\file_get_contents($path)),
            $expected
        );
        $parseIni = parse_ini_string();
        $this->assertEquals(
            $parseIni(\file_get_contents($path)),
            $expected
        );
    }

    public function testParseIniString2()
    {
        $path = \dirname(__FILE__) . '/fixtures/sample.ini';
        $expected = [
            'first_section' => [
                'one' => '1',
                'five' => '5',
                'animal' => 'BIRD',
            ],
            'second_section' => [
                'path' => '/usr/local/bin',
                'URL' => 'http://www.example.com/~username',
            ],
            'third_section' => [
                'phpversion' => [ '5.0', '5.1', '5.2', '5.3' ],
                'urls' => [
                    'svn' => 'http://svn.php.net',
                    'git' => 'http://git.php.net'
                ]
            ]
        ];
        $this->assertEquals(
            parse_ini_string2(true, \file_get_contents($path)),
            $expected
        );
        $parseIni = parse_ini_string2(true);
        $this->assertEquals(
            $parseIni(\file_get_contents($path)),
            $expected
        );
    }

    public function testParseIniString3()
    {
        $path = \dirname(__FILE__) . '/fixtures/sample.ini';
        $expected = [
            'first_section' => [
                'one' => 1,
                'five' => 5,
                'animal' => 'BIRD',
            ],
            'second_section' => [
                'path' => '/usr/local/bin',
                'URL' => 'http://www.example.com/~username',
            ],
            'third_section' => [
                'phpversion' => [ '5.0', '5.1', '5.2', '5.3' ],
                'urls' => [
                    'svn' => 'http://svn.php.net',
                    'git' => 'http://git.php.net'
                ]
            ]
        ];
        $this->assertEquals(
            parse_ini_string3(INI_SCANNER_TYPED, true, \file_get_contents($path)),
            $expected
        );
        $parseIni = parse_ini_string3(INI_SCANNER_TYPED, true);
        $this->assertEquals(
            $parseIni(\file_get_contents($path)),
            $expected
        );
    }

    public function testPathInfo()
    {
        $path = \dirname(__FILE__) . '/fixtures/sample.ini';
        $this->assertEquals(pathinfo($path), \pathinfo($path));
        $pathInfo = pathinfo();
        $this->assertEquals($pathInfo($path), \pathinfo($path));
    }

    public function testPathInfo2()
    {
        $path = \dirname(__FILE__) . '/fixtures/sample.ini';
        $this->assertEquals(pathinfo2(PATHINFO_DIRNAME, $path), \pathinfo($path, PATHINFO_DIRNAME));
        $pathInfo = pathinfo2(PATHINFO_DIRNAME);
        $this->assertEquals($pathInfo($path), \pathinfo($path, PATHINFO_DIRNAME));
    }

    public function testPclose()
    {
        $ph = \popen('/bin/ls', 'r');
        $read = \fread($ph, 2096);
        $res = pclose($ph);
        $this->assertGreaterThan(-1, $res);
    }

    public function testPopen()
    {
        $ph = popen('r', '/bin/ls');
        $read = \fread($ph, 2096);
        $res = \pclose($ph);
        $this->assertGreaterThan(-1, $res);
    }

    public function testReadfile()
    {
        $path = \dirname(__FILE__) . '/fixtures/sample.ini';

        \ob_start();
        readfile($path);
        $contents = \ob_get_contents();
        \ob_end_clean();

        $expected = [
            "; This is a sample configuration file",
            "; Comments start with ';', as in php.ini",
            '',
            "[first_section]",
            "one = 1",
            "five = 5",
            "animal = BIRD",
            '',
            "[second_section]",
            "path = \"/usr/local/bin\"",
            "URL = \"http://www.example.com/~username\"",
            '',
            "[third_section]",
            "phpversion[] = \"5.0\"",
            "phpversion[] = \"5.1\"",
            "phpversion[] = \"5.2\"",
            "phpversion[] = \"5.3\"",
            '',
            "urls[svn] = \"http://svn.php.net\"",
            "urls[git] = \"http://git.php.net\""
        ];

        $readfile = readfile();
        \ob_start();
        $readfile($path);
        $contents2 = \ob_get_contents();
        \ob_end_clean();

        $this->assertEquals(
            \implode("\n", $expected),
            $contents
        );
        $this->assertEquals(
            \implode("\n", $expected),
            $contents2
        );
    }

    public function testReadFile2()
    {
        $path = \dirname(__FILE__) . '/fixtures/sample.ini';

        \ob_start();
        readfile2(true, $path);
        $contents = \ob_get_contents();
        \ob_end_clean();

        $expected = [
            "; This is a sample configuration file",
            "; Comments start with ';', as in php.ini",
            '',
            "[first_section]",
            "one = 1",
            "five = 5",
            "animal = BIRD",
            '',
            "[second_section]",
            "path = \"/usr/local/bin\"",
            "URL = \"http://www.example.com/~username\"",
            '',
            "[third_section]",
            "phpversion[] = \"5.0\"",
            "phpversion[] = \"5.1\"",
            "phpversion[] = \"5.2\"",
            "phpversion[] = \"5.3\"",
            '',
            "urls[svn] = \"http://svn.php.net\"",
            "urls[git] = \"http://git.php.net\""
        ];

        $readfile = readfile2(true);
        \ob_start();
        $readfile($path);
        $contents2 = \ob_get_contents();
        \ob_end_clean();

        $this->assertEquals(
            \implode("\n", $expected),
            $contents
        );
        $this->assertEquals(
            \implode("\n", $expected),
            $contents2
        );
    }

    public function testReadFile3()
    {
        $ctx = \stream_context_create();
        $path = \dirname(__FILE__) . '/fixtures/sample.ini';

        \ob_start();
        readfile3($ctx, true, $path);
        $contents = \ob_get_contents();
        \ob_end_clean();

        $expected = [
            "; This is a sample configuration file",
            "; Comments start with ';', as in php.ini",
            '',
            "[first_section]",
            "one = 1",
            "five = 5",
            "animal = BIRD",
            '',
            "[second_section]",
            "path = \"/usr/local/bin\"",
            "URL = \"http://www.example.com/~username\"",
            '',
            "[third_section]",
            "phpversion[] = \"5.0\"",
            "phpversion[] = \"5.1\"",
            "phpversion[] = \"5.2\"",
            "phpversion[] = \"5.3\"",
            '',
            "urls[svn] = \"http://svn.php.net\"",
            "urls[git] = \"http://git.php.net\""
        ];

        $readfile = readfile3($ctx, true);
        \ob_start();
        $readfile($path);
        $contents2 = \ob_get_contents();
        \ob_end_clean();

        $this->assertEquals(
            \implode("\n", $expected),
            $contents
        );
        $this->assertEquals(
            \implode("\n", $expected),
            $contents2
        );
    }

    public function testReadLink()
    {
        $path = \dirname(__FILE__) . '/fixtures';
        $file = $path . '/test2.csv';
        $sym = $path . '/tests';
        $readlink = readlink();
        \touch($file);
        \symlink($file, $sym);

        $res = readlink($sym);
        $res_ = $readlink($sym);
        \unlink($file);
        \unlink($sym);

        $this->assertEquals($res, $file);
        $this->assertEquals($res_, $file);
    }

    public function testRealPath()
    {
        $path = \dirname(__FILE__);
        $this->assertEquals(
            $path,
            realpath('.') . '/test'
        );

        $realpath = realpath();
        $this->assertEquals(
            $path,
            $realpath('.') . '/test'
        );
    }

    public function testRename()
    {

    }

    public function testRename3()
    {

    }

    public function testRewind()
    {

    }

    public function testRmdir()
    {

    }

    public function testRmdir2()
    {

    }

    public function testSetFileBuffer()
    {

    }

    public function testStat()
    {

    }

    public function testSymlink()
    {

    }

    public function testTempnam()
    {

    }

    public function testTouch()
    {

    }

    public function testTouch2()
    {

    }

    public function testTouch3()
    {

    }

    public function testUmask1()
    {

    }

    public function testUnlink()
    {

    }

    public function testUnlink2()
    {

    }

    public function testCompose()
    {
        $a = function ($x) {
            return $x + 1;
        };
        $b = function ($x) {
            return $x + 2;
        };

        $f = compose($a, $b);
        $this->assertEquals($f(2), 5);
    }

    public function testComposeMultiple()
    {
        $a = function ($x) {
            return $x / 3;
        };
        $b = function ($x) {
            return $x * 2;
        };
        $c = function ($x) {
            return $x + 4;
        };
        $f = compose($a, $b, $c);
        $this->assertEquals($f(2), 4);
    }

    public function testCurry()
    {
        $add = curry(
            function ($a, $b, $c) {
                return $a + $b + $c;
            }
        );

        $add1 = $add(1);
        $add11 = $add(1, 1);

        $add12 = $add1(2);
        $add112 = $add11(2);

        $add111 = $add(1, 1, 1);
        $add122 = $add1(2, 2);
        $add123 = $add12(3);

        $this->assertEquals($add111, 3);
        $this->assertEquals($add122, 5);
        $this->assertEquals($add123, 6);
    }

    public function testExplode()
    {
        $this->assertEquals(explode(' ', 'foo bar'), \explode(' ', 'foo bar'));
        $this->assertEquals(explode(' ', 'foo bar'), ['foo', 'bar']);

        $explodeBySpace = explode(' ');
        $this->assertEquals($explodeBySpace('foo bar'), ['foo', 'bar']);
    }

    public function testExplode3()
    {
        $str = 'one|two|three|four';
        $expected = ['one', 'two|three|four'];

        $this->assertEquals(
            explode3(2, '|', $str),
            $expected
        );

        $explodeLimit2ByPipe = explode3(2, '|');
        $explodeLimit2ByPipe($str);
        $this->assertEquals(
            $explodeLimit2ByPipe($str),
            $expected
        );

        $this->assertEquals(
            explode3(2, '|', $str),
            \explode('|', $str, 2)
        );
    }

    public function testImplode()
    {
        $arr = ['one', 'two', 'three'];
        $this->assertEquals(implode(',', $arr), \implode(',', $arr));
        $this->assertEquals(implode(',', $arr), 'one,two,three');

        $joinByComma = implode(',');
        $this->assertEquals($joinByComma($arr), 'one,two,three');
    }

    public function testImplode1()
    {
        $arr = ['one', 'two', 'three'];
        $this->assertEquals(implode1($arr), \implode($arr));
        $this->assertEquals(implode1($arr), 'onetwothree');
    }

    public function testAddCSlashes()
    {
        $this->assertEquals(addcslashes('A..z', 'foo[ ]'), \addcslashes('foo[ ]', 'A..z'));
        $this->assertEquals(addcslashes('A..z', 'foo[ ]'), '\f\o\o\[ \]');
        $addCSlashesAToZ = addcslashes('A..z');

        $this->assertEquals($addCSlashesAToZ('foo[ ]'), '\f\o\o\[ \]');
    }

    public function testAddSlashes()
    {
        $str = "Is your name O'Reilly?";

        $this->assertEquals(addslashes($str), \addslashes($str));
        $this->assertEquals(addslashes($str), "Is your name O\'Reilly?");

        $addSlashes = addslashes();
        $this->assertEquals($addSlashes($str), "Is your name O\'Reilly?");
    }

    public function testBin2Hex()
    {
        $this->assertEquals(bin2hex('test'), \bin2hex('test'));
        $this->assertEquals(bin2hex('test'), '74657374');

        $bin2Hex = bin2hex();
        $this->assertEquals($bin2Hex('test'), '74657374');
    }

    public function testChop()
    {
        $this->assertEquals(chop("test\n"), \chop("test\n"));
        $this->assertEquals(chop("test\n"), "test");

        $chop = chop();
        $this->assertEquals($chop("test\n"), "test");
    }

    public function testChop2()
    {
        $this->assertEquals(chop2("World!", "Hello World!"), \chop("Hello World!", "World!"));
        $this->assertEquals(chop2("World!", "Hello World!"), "Hello ");

        $chopWorld = chop2("World!");
        $this->assertEquals($chopWorld("Hello World!"), "Hello ");
    }

    public function testChr()
    {
        $this->assertEquals(chr(046), \chr(046));
        $this->assertEquals(chr(046), "&");

        $chr = chr();
        $this->assertEquals($chr(046), "&");
    }

    public function testChunkSplit()
    {
        $this->assertEquals(chunk_split("test"), \chunk_split("test"));
        $this->assertEquals(chunk_split("test"), "test\r\n");

        $chunkSplit = chunk_split();
        $this->assertEquals($chunkSplit("test"), "test\r\n");
    }

    public function testChunkSplit2()
    {
        $this->assertEquals(chunk_split2(2, "test"), \chunk_split("test", 2));
        $this->assertEquals(chunk_split2(2, "test"), "te\r\nst\r\n");

        $chunkSplitLen2 = chunk_split2(2);
        $this->assertEquals($chunkSplitLen2("test"), "te\r\nst\r\n");
    }

    public function testChunkSplit3()
    {
        $this->assertEquals(chunk_split3('.', 2, 'test'), \chunk_split('test', 2, '.'));
        $this->assertEquals(chunk_split3('.', 2, "test"), "te.st.");

        $chunkSplitDot = chunk_split3('.');
        $chunkSplitLen2Dot = $chunkSplitDot(2);
        $this->assertEquals($chunkSplitDot(2, "test"), "te.st.");
        $this->assertEquals($chunkSplitLen2Dot("test"), "te.st.");
    }

    public function testConvertCyrString()
    {
        $str = "Good Morning..";
        $expected = "Good Morning..";
        $this->assertEquals(convert_cyr_string('w', 'k', $str), \convert_cyr_string($str, 'w', 'k'));
        $this->assertEquals(convert_cyr_string('w', 'k', $str), $expected);

        $convertFromWToA = convert_cyr_string('w', 'k');
        $this->assertEquals($convertFromWToA($str), $expected);
    }

    public function testConvertUUDecode()
    {
        $str = "+22!L;W9E(%!(4\"$`\n`";
        $this->assertEquals(convert_uudecode($str), \convert_uudecode($str));
        $this->assertEquals(convert_uudecode($str), 'I love PHP!');

        $convertUUDecode = convert_uudecode();
        $this->assertEquals($convertUUDecode($str), 'I love PHP!');
    }

    public function testConvertUUEncode()
    {
        $this->assertEquals(convert_uuencode('I love PHP!'), \convert_uuencode('I love PHP!'));
        $this->assertEquals(convert_uuencode('I love PHP!'), "+22!L;W9E(%!(4\"$`\n`\n");

        $convertUUEncode = convert_uuencode();
        $this->assertEquals($convertUUEncode('I love PHP!'), "+22!L;W9E(%!(4\"$`\n`\n");
    }

    public function testCountChars()
    {
        $this->assertEquals(count_chars('Test'), \count_chars('Test'));
        $res = count_chars('Test');
        $this->assertCount(256, $res);

        $this->assertEquals(\array_filter($res, function ($x) {
            return $x > 0;
        }), [
            '84' => 1,
            '101' => 1,
            '115' => 1,
            '116' => 1
        ]);
    }

    public function testCountChars2()
    {
        $this->assertEquals(count_chars2(1, 'Test'), \count_chars('Test', 1));
        $this->assertEquals(count_chars2(1, 'Test'), [
            '84' => 1,
            '101' => 1,
            '115' => 1,
            '116' => 1
        ]);

        $countCharsGreaterThan0 = count_chars2(1);
        $this->assertEquals($countCharsGreaterThan0('Test'), [
            '84' => 1,
            '101' => 1,
            '115' => 1,
            '116' => 1
        ]);
    }

    public function testCrc32()
    {
        $this->assertEquals(crc32('test'), \crc32('test'));
        $this->assertEquals(crc32('test'), 3632233996);

        $crc32 = crc32();
        $this->assertEquals($crc32('test'), 3632233996);
    }

    public function testCrypt()
    {
        $this->assertEquals(crypt('Foo', 'Test'), \crypt('Test', 'Foo'));
        $this->assertEquals(crypt('Foo', 'Test'), 'Foh5xTm5Uw31I');

        $crypt = crypt('Foo');
        $this->assertEquals($crypt('Test'), 'Foh5xTm5Uw31I');
    }

    public function testHex2Bin()
    {
        $this->assertEquals(hex2bin('6578616d706c65206865782064617461'), \hex2bin('6578616d706c65206865782064617461'));
        $this->assertEquals(hex2bin('6578616d706c65206865782064617461'), 'example hex data');

        $hex2Bin = hex2bin();
        $this->assertEquals($hex2Bin('6578616d706c65206865782064617461'), 'example hex data');
    }

    public function testHtmlSpecialCharsDecode()
    {
        $this->assertEquals(
            htmlspecialchars_decode('<p>this -&gt; &quot;</p>\n'),
            \htmlspecialchars_decode('<p>this -&gt; &quot;</p>\n')
        );
        $this->assertEquals(
            htmlspecialchars_decode('<p>this -&gt; &quot;</p>\n'),
            '<p>this -> "</p>\n'
        );
    }

    public function testHtmlSpecialCharsDecode2()
    {
        $this->assertEquals(
            htmlspecialchars_decode2(ENT_NOQUOTES, '<p>this -&gt; &quot;</p>\n'),
            \htmlspecialchars_decode('<p>this -&gt; &quot;</p>\n', ENT_NOQUOTES)
        );

        $removeWithoutQuotes = htmlspecialchars_decode2(ENT_NOQUOTES);
        $this->assertEquals(
            $removeWithoutQuotes('<p>this -&gt; &quot;</p>\n'),
            '<p>this -> &quot;</p>\n'
        );
    }

    public function testJoin()
    {
        $arr = ['one', 'two', 'three'];
        $this->assertEquals(join(',', $arr), \join(',', $arr));
        $this->assertEquals(join(',', $arr), 'one,two,three');

        $joinByComma = join(',');
        $this->assertEquals($joinByComma($arr), 'one,two,three');
    }

    public function testLcFirst()
    {
        $this->assertEquals(lcfirst('HelloWorld'), \lcfirst('HelloWorld'));
        $this->assertEquals(lcfirst('HelloWorld'), 'helloWorld');

        $lcFirst = lcfirst();
        $this->assertEquals($lcFirst('HelloWorld'), 'helloWorld');
    }

    public function testLevenshtein()
    {
        $this->assertEquals(levenshtein('carrrot', 'carrot'), \levenshtein('carrrot', 'carrot'));

        $getLevenWithCarrot = levenshtein('carrot');
        $this->assertEquals($getLevenWithCarrot('carrrot'), \levenshtein('carrot', 'carrrot'));

        $this->assertEquals($getLevenWithCarrot('carrrot'), 1);
    }

    public function testLevenshtein5()
    {
        $a = '1 apple';
        $b = '2 apples';
        $this->assertEquals(levenshtein5(1, 0, 0, $a, $b), \levenshtein($a, $b, 1, 0, 0));

        $levenshteinInsCost = levenshtein5(1, 0, 0);
        $this->assertEquals($levenshteinInsCost($a, $b), \levenshtein($a, $b, 1, 0, 0));
    }

    public function testLTrim()
    {
        $a = "\t\tThese are a few words :) ...  ";
        $this->assertEquals(ltrim($a), \ltrim($a));
        $this->assertEquals(ltrim($a), "These are a few words :) ...  ");

        $ltrim = ltrim();
        $this->assertEquals($ltrim($a), \ltrim($a));
    }

    public function testLTrim2()
    {
        $a = "\t\tThese are a few words :) ...  ";
        $this->assertEquals(ltrim2(" \t.", $a), \ltrim($a, " \t."));
        $this->assertEquals(ltrim2(" \t.", $a), "These are a few words :) ...  ");
    }

    public function testMd5File()
    {
        $this->assertEquals(
            md5_file(realpath(dirname(__FILE__)) . '/fixtures/config.json'),
            \md5_file(realpath(dirname(__FILE__)) . '/fixtures/config.json')
        );

        $this->assertEquals(
            md5_file(realpath(dirname(__FILE__)) . '/fixtures/config.json'),
            '625b7290ee67ba3bb84ebe1fa5c32fbe'
        );

        $md5File = md5_file();
        $this->assertEquals(
            $md5File(realpath(dirname(__FILE__)) . '/fixtures/config.json'),
            '625b7290ee67ba3bb84ebe1fa5c32fbe'
        );
    }

    public function testMd5File2()
    {
        $this->assertEquals(
            md5_file2(true, realpath(dirname(__FILE__)) . '/fixtures/config.json'),
            \md5_file(realpath(dirname(__FILE__)) . '/fixtures/config.json', true)
        );

        $md5WithRawOutput = md5_file2(true);
        $this->assertEquals(
            $md5WithRawOutput(realpath(dirname(__FILE__)) . '/fixtures/config.json'),
            \md5_file(realpath(dirname(__FILE__)) . '/fixtures/config.json', true)
        );
    }

    public function testMd5()
    {
        $str = 'apple';
        $expected = '1f3870be274f6c49b3e31a0c6728957f';

        $this->assertEquals(md5($str), \md5($str));
        $this->assertEquals(md5($str), $expected);

        $md5 = md5();
        $this->assertEquals($md5($str), $expected);
    }

    public function testMd52()
    {
        $str = 'apple';
        $this->assertEquals(md52(true, $str), \md5($str, true));

        $md5RawOutput = md52(true);
        $this->assertEquals($md5RawOutput($str), \md5($str, true));
    }

    public function testMetaphone()
    {
        $this->assertEquals(metaphone('programming'), \metaphone('programming'));
        $this->assertEquals(metaphone('programming'), 'PRKRMNK');

        $metaphone = metaphone();
        $this->assertEquals($metaphone('programming'), 'PRKRMNK');
    }

    public function testMetaphone2()
    {
        $this->assertEquals(metaphone2(5, 'programming'), \metaphone('programming', 5));
        $this->assertEquals(metaphone2(5, 'programming'), 'PRKRM');

        $metaphone5Phonemes = metaphone2(5);
        $this->assertEquals($metaphone5Phonemes('programming'), 'PRKRM');
    }

    public function testMoneyFormat()
    {
        $num = 1234.56;
        setlocale(LC_MONETARY, 'en_IN');
        $this->assertEquals(money_format('%i', $num), \money_format('%i', $num));
        $this->assertEquals(money_format('%i', $num), 'INR 1,234.56');

        $moneyFormat = money_format('%i');
        $this->assertEquals($moneyFormat($num), 'INR 1,234.56');
    }

    public function testNLLangInfo()
    {
        $this->assertEquals(nl_langinfo(MON_1), \nl_langinfo(MON_1));
        $this->assertEquals(nl_langinfo(MON_1), "January");

        $nlLangInfo = nl_langinfo();
        $this->assertEquals($nlLangInfo(MON_1), "January");
    }

    public function testNL2BR()
    {
        $str = "foo isn't\n bar";
        $this->assertEquals(nl2br($str), \nl2br($str));
        $this->assertEquals(nl2br($str), "foo isn't<br />\n bar");

        $nl2br = nl2br();
        $this->assertEquals($nl2br($str), "foo isn't<br />\n bar");
    }

    public function testNL2BR2()
    {
        $str = "Welcome\r\nThis is my HTML document";
        $expected = "Welcome<br>\r\nThis is my HTML document";
        $this->assertEquals(nl2br2(false, $str), \nl2br($str, false));

        $this->assertEquals(nl2br2(false, $str), $expected);

        $nl2brNotXHtml = nl2br2(false);
        $this->assertEquals($nl2brNotXHtml($str), $expected);
    }

    public function testNumberFormat()
    {
        $num = 1234.56;
        $this->assertEquals(number_format($num), \number_format($num));
        $this->assertEquals(number_format($num), '1,235');

        $numFormat = number_format();
        $this->assertEquals($numFormat($num), '1,235');
    }

    public function testNumberFormat2()
    {
        $num = 1234.56;
        $this->assertEquals(number_format2(2, $num), \number_format($num, 2));
        $this->assertEquals(number_format2(2, $num), '1,234.56');

        $formatTo2Decimals = number_format2(2);
        $this->assertEquals($formatTo2Decimals($num), '1,234.56');
    }

    public function testNumberFormat4()
    {
        $num = 1234.56;
        $this->assertEquals(number_format4(2, ',', ' ', $num), \number_format($num, 2, ',', ' '));
        $this->assertEquals(number_format4(2, ',', ' ', $num), '1 234,56');

        $frNumberFormat = number_format4(2, ',', ' ');
        $this->assertEquals($frNumberFormat($num), '1 234,56');
    }

    public function testOrd()
    {
        $str = "\n";
        $this->assertEquals(ord($str), \ord($str));
        $this->assertEquals(ord($str), 10);

        $ord = ord();
        $this->assertEquals($ord($str), 10);
    }

    public function testParseStr()
    {
        $str = "first=value&arr[]=foo+bar&arr[]=baz";
        $output = parse_str($str);
        \parse_str($str, $expected);
        $this->assertEquals($output, $expected);

        $parseStr = parse_str();
        $this->assertEquals($parseStr($str), $expected);
    }

    public function testQuotemeta()
    {
        $str = "Hello world. (can you hear me?)";
        $expected = "Hello world\. \(can you hear me\?\)";
        $this->assertEquals(quotemeta($str), \quotemeta($str));
        $this->assertEquals(quotemeta($str), $expected);

        $quotemeta = quotemeta();
        $this->assertEquals($quotemeta($str), $expected);
    }

    public function testRTrim()
    {
        $this->assertEquals(rtrim("test\n"), \rtrim("test\n"));
        $this->assertEquals(rtrim("test\n"), "test");

        $rtrim = rtrim();
        $this->assertEquals($rtrim("test\n"), "test");
    }

    public function testRTrim2()
    {
        $this->assertEquals(rtrim2("World!", "Hello World!"), \rtrim("Hello World!", "World!"));
        $this->assertEquals(rtrim2("World!", "Hello World!"), "Hello ");

        $rtrimWorld = rtrim2("World!");
        $this->assertEquals($rtrimWorld("Hello World!"), "Hello ");
    }

    public function testSHA1File()
    {
        $this->assertEquals(
            sha1_file(realpath(dirname(__FILE__)) . '/fixtures/config.json'),
            \sha1_file(realpath(dirname(__FILE__)) . '/fixtures/config.json')
        );

        $this->assertEquals(
            sha1_file(realpath(dirname(__FILE__)) . '/fixtures/config.json'),
            '7b25c66924c90da0ffd45fa1e78f858d37cae7bc'
        );

        $sha1File = sha1_file();
        $this->assertEquals(
            $sha1File(realpath(dirname(__FILE__)) . '/fixtures/config.json'),
            '7b25c66924c90da0ffd45fa1e78f858d37cae7bc'
        );
    }

    public function testSHA1File2()
    {
        $this->assertEquals(
            sha1_file2(false, realpath(dirname(__FILE__)) . '/fixtures/config.json'),
            \sha1_file(realpath(dirname(__FILE__)) . '/fixtures/config.json', false)
        );

        $sha1File2NoRaw = sha1_file2(false);
        $this->assertEquals(
            $sha1File2NoRaw(realpath(dirname(__FILE__)) . '/fixtures/config.json'),
            \sha1_file(realpath(dirname(__FILE__)) . '/fixtures/config.json', false)
        );
    }

    public function testSha1()
    {
        $str = 'apple';
        $expected = 'd0be2dc421be4fcd0172e5afceea3970e2f3d940';

        $this->assertEquals(sha1($str), \sha1($str));
        $this->assertEquals(sha1($str), $expected);

        $sha1 = sha1();
        $this->assertEquals($sha1($str), $expected);
    }

    public function testSha12()
    {
        $str = 'apple';
        $this->assertEquals(sha12(true, $str), \sha1($str, true));

        $sha1NoRaw = sha12(false);
        $this->assertEquals($sha1NoRaw($str), \sha1($str, false));
    }

    public function testSimilarText()
    {
        $a = 'This is a test!';
        $b = 'A test, this is!';
        $this->assertEquals(similar_text($a, $b), \similar_text($a, $b));
        $this->assertEquals(similar_text($a, $b), 7);

        $similarToA = similar_text($a);
        $this->assertEquals($similarToA($b), 7);
    }

    public function testSimilarTextPct()
    {
        $a = 'This is a test!';
        $b = 'A test, this is!';
        $sim = \similar_text($a, $b, $pct);
        $expected = 45.16129032258065;
        $this->assertEquals(similar_text_pct($a, $b), $pct);
        $this->assertEquals(similar_text_pct($a, $b), $expected);

        $similarToA = similar_text_pct($a);
        $this->assertEquals($similarToA($b), $expected);
    }

    public function testSoundex()
    {
        $str = 'Euler';
        $expected = 'E460';
        $this->assertEquals(soundex($str), \soundex($str));
        $this->assertEquals(soundex($str), $expected);

        $soundex = soundex();
        $this->assertEquals($soundex($str), $expected);
    }

    public function testStrGetCSV()
    {
        $str = 'a,b';
        $this->assertEquals(str_getcsv($str), \str_getcsv($str));
        $this->assertEquals(str_getcsv($str), ['a', 'b']);

        $strGetCSV = str_getcsv();
        $this->assertEquals($strGetCSV($str), ['a', 'b']);
    }

    public function testStrGetCSV2()
    {
        $str = 'a.b';
        $this->assertEquals(str_getcsv2('.', $str), \str_getcsv($str, '.'));
        $this->assertEquals(str_getcsv2('.', $str), ['a', 'b']);

        $getCSVDotSep = str_getcsv2('.');
        $this->assertEquals($getCSVDotSep($str), ['a', 'b']);
    }

    public function testStrGetCSV3()
    {
        $str = '&a&.&b&';
        $this->assertEquals(str_getcsv3('.', '&', $str), \str_getcsv($str, '.', '&'));
        $this->assertEquals(str_getcsv3('.', '&', $str), ['a', 'b']);

        $getCSVDotSep = str_getcsv3('.');
        $getCSVDotSepAmpEnclosure = $getCSVDotSep('&');
        $this->assertEquals($getCSVDotSepAmpEnclosure($str), ['a', 'b']);
    }

    public function testStrGetCSV4()
    {
        $str = '&^a&.&^b&';
        $this->assertEquals(str_getcsv4('.', '&', '^', $str), \str_getcsv($str, '.', '&', '^'));
        $this->assertEquals(str_getcsv4('.', '&', '^', $str), ['^a', '^b']);

        $getCSVDotSepAmpEnclosureCaretEscape = str_getcsv4('.', '&', '^');
        $this->assertEquals($getCSVDotSepAmpEnclosureCaretEscape($str), ['^a', '^b']);
    }

    public function testStrIReplace()
    {
        $str = 'This is a test!';
        $this->assertEquals(str_ireplace('!', '.', $str), \str_ireplace('!', '.', $str));
        $this->assertEquals(str_ireplace('!', '.', $str), 'This is a test.');

        $quiet = str_ireplace('!', '.');
        $this->assertEquals($quiet($str), 'This is a test.');
    }

    public function testStrIReplaceCount()
    {
        $str = 'This is a test!';
        \str_ireplace('!', '.', $str, $count);
        $this->assertEquals(str_ireplace_count('!', '.', $str), $count);
        $this->assertEquals(str_ireplace_count('!', '.', $str), 1);

        $quiet = str_ireplace_count('!', '.');
        $this->assertEquals($quiet($str), 1);
    }

    public function testStrPad()
    {
        $str = 'Alien';
        $this->assertEquals(str_pad(6, $str), \str_pad($str, 6));
        $this->assertEquals(str_pad(6, $str), 'Alien ');

        $padTo6 = str_pad(6);
        $this->assertEquals($padTo6($str), 'Alien ');
    }

    public function testStrPad3()
    {
        $str = 'Alien';
        $this->assertEquals(str_pad3(6, '-', $str), \str_pad($str, 6, '-'));
        $this->assertEquals(str_pad3(6, '-', $str), 'Alien-');

        $padTo6 = str_pad3(6);
        $padTo6WithDash = $padTo6('-');
        $this->assertEquals($padTo6WithDash($str), 'Alien-');
    }

    public function testStrPad4()
    {
        $str = 'Alien';
        $this->assertEquals(str_pad4(STR_PAD_LEFT, 7, '-', $str), \str_pad($str, 7, '-', STR_PAD_LEFT));
        $this->assertEquals(str_pad4(STR_PAD_LEFT, 7, '-', $str), '--Alien');

        $padLeft = str_pad4(STR_PAD_LEFT);
        $padTo7WithDashOnLeft = $padLeft(7, '-');
        $this->assertEquals($padTo7WithDashOnLeft($str), '--Alien');
    }

    public function testStrRepeat()
    {
        $this->assertEquals(str_repeat(2, 'a'), \str_repeat('a', 2));
        $this->assertEquals(str_repeat(2, 'a'), 'aa');

        $repeatTwice = str_repeat(2);
        $this->assertEquals($repeatTwice('a'), 'aa');
    }

    public function testStrReplace()
    {
        $str = 'This is a test!';
        $this->assertEquals(str_replace('!', '.', $str), \str_replace('!', '.', $str));
        $this->assertEquals(str_replace('!', '.', $str), 'This is a test.');

        $quiet = str_replace('!', '.');
        $this->assertEquals($quiet($str), 'This is a test.');
    }

    public function testStrReplaceCount()
    {
        $str = 'This is a test!';
        \str_replace('!', '.', $str, $count);
        $this->assertEquals(str_replace_count('!', '.', $str), $count);
        $this->assertEquals(str_replace_count('!', '.', $str), 1);

        $quiet = str_replace_count('!', '.');
        $this->assertEquals($quiet($str), 1);
    }

    public function testStrRot13()
    {
        $str = 'PHP 4.3.0';
        $expected = 'CUC 4.3.0';
        $this->assertEquals(str_rot13($str), \str_rot13($str));
        $this->assertEquals(str_rot13($str), $expected);

        $strRot13 = str_rot13();
        $this->assertEquals($strRot13($str), $expected);
    }

    public function testStrShuffle()
    {
        $str = 'abcdefg';
        $this->assertEquals(strlen(str_shuffle($str)), strlen(\str_shuffle($str)));

        $shuffle = str_shuffle();
        $this->assertEquals(strlen($shuffle($str)), strlen(\str_shuffle($str)));
    }

    public function testStrSplit()
    {
        $str = 'abc';
        $this->assertEquals(str_split($str), \str_split($str));
        $this->assertEquals(str_split($str), ['a', 'b', 'c']);

        $strSplit = str_split();
        $this->assertEquals($strSplit($str), ['a', 'b', 'c']);
    }

    public function testStrSplit2()
    {
        $str = 'abc';
        $this->assertEquals(str_split2(2, $str), \str_split($str, 2));
        $this->assertEquals(str_split2(2, $str), ['ab', 'c']);

        $strSplit2 = str_split2(2);
        $this->assertEquals($strSplit2($str), ['ab', 'c']);
    }

    public function testStrWordCount()
    {
        $str = 'This is a test.';
        $this->assertEquals(str_word_count($str), \str_word_count($str));
        $this->assertEquals(str_word_count($str), 4);

        $wc = str_word_count();
        $this->assertEquals($wc($str), 4);
    }

    public function testStrWordCount2()
    {
        $str = 'This is a test.';
        $this->assertEquals(str_word_count2(1, $str), \str_word_count($str, 1));
        $this->assertEquals(str_word_count2(1, $str), [ 'This', 'is', 'a', 'test' ]);

        $words = str_word_count2(1);
        $this->assertEquals($words($str), ['This', 'is', 'a', 'test']);
    }

    public function testStrWordCount3()
    {
        $str = 'This is a test.';
        $this->assertEquals(str_word_count3(0, "\ ", $str), \str_word_count($str, 0, "\ "));
        $this->assertEquals(str_word_count3(0, "\ ", $str), 1);

        $wc = str_word_count3(0, "\ ");
        $this->assertEquals($wc($str), 1);
    }

    public function testStrCaseCmp()
    {
        $a = 'a';
        $b = 'b';
        $this->assertEquals(strcasecmp($a, $b), \strcasecmp($a, $b));
        $this->assertEquals(strcasecmp($a, $b), -1);

        $cmpWitha = strcasecmp($a);
        $this->assertEquals($cmpWitha($b), -1);
    }

    public function testStrChr()
    {
        $email  = 'name@example.com';
        $this->assertEquals(strchr('@', $email), \strchr($email, '@'));
        $this->assertEquals(strchr('@', $email), '@example.com');

        $searchForAt = strchr('@');
        $this->assertEquals($searchForAt($email), '@example.com');
    }

    public function testStrChr3()
    {
        $email  = 'name@example.com';
        $this->assertEquals(strchr3(true, '@', $email), \strchr($email, '@', true));
        $this->assertEquals(strchr3(true, '@', $email), 'name');

        $searchForAt = strchr3(true, '@');
        $this->assertEquals($searchForAt($email), 'name');
    }

    public function testStrCmp()
    {
        $a = 'a';
        $b = 'b';
        $this->assertEquals(strcmp($a, $b), \strcmp($a, $b));
        $this->assertEquals(strcmp($a, $b), -1);

        $cmpWitha = strcmp($a);
        $this->assertEquals($cmpWitha($b), -1);
    }

    public function testStrColl()
    {
        $a = 'a';
        $b = 'b';
        $this->assertEquals(strcoll($a, $b), \strcoll($a, $b));
        $this->assertEquals(strcoll($a, $b), -1);

        $cmpWitha = strcoll($a);
        $this->assertEquals($cmpWitha($b), -1);
    }

    public function testStrcspn()
    {
        $a = 'abcd';
        $b = 'apple';

        $this->assertEquals(strcspn($b, $a), \strcspn($a, $b));

        $strcspnB = strcspn($b);
        $this->assertEquals($strcspnB($a), \strcspn($a, $b));
    }

    public function testStrcspn3()
    {
        $a = 'abcdhelloabcd';
        $b = 'abcd';
        $this->assertEquals(strcspn3(-9, $b, $a), \strcspn($a, $b, -9));
        $this->assertEquals(strcspn3(-9, $b, $a), 5);

        $f = strcspn3(-9);
        $this->assertEquals($f($b, $a), \strcspn($a, $b, -9));
    }

    public function testStrcspn4()
    {
        $a = 'abcdhelloabcd';
        $b = 'abcd';
        $this->assertEquals(strcspn4(-9, -5, $b, $a), \strcspn($a, $b, -9, -5));
        $this->assertEquals(strcspn4(-9, -5, $b, $a), 4);

        $f = strcspn4(-9, -5);
        $this->assertEquals($f($b, $a), \strcspn($a, $b, -9, -5));
    }

    public function testStripTags()
    {
        $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
        $this->assertEquals(strip_tags($text), \strip_tags($text));

        $stripTags = strip_tags();
        $this->assertEquals($stripTags($text), \strip_tags($text));
    }

    public function testStripTags2()
    {
        $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
        $this->assertEquals(strip_tags2('<p><a>', $text), \strip_tags($text, '<p><a>'));

        $stripTagsKeepPAndA = strip_tags2('<p><a>');
        $this->assertEquals($stripTagsKeepPAndA($text), \strip_tags($text, '<p><a>'));
    }

    public function testStripCSlashes()
    {
        $str = '\f\o\o\[ \]';
        $this->assertEquals(stripcslashes($str), \stripcslashes($str));

        $stripcslashes = stripcslashes();
        $this->assertEquals($stripcslashes($str), \stripcslashes($str));
    }

    public function testStripos()
    {
        $findme = 'a';
        $mystring1 = 'xyz';
        $mystring2 = 'ABC';

        $pos1 = stripos($findme, $mystring1);
        $pos2 = stripos($findme, $mystring2);

        $this->assertEquals($pos1, \stripos($mystring1, $findme));
        $this->assertEquals($pos2, \stripos($mystring2, $findme));

        $findA = stripos($findme);
        $this->assertEquals($findA($mystring1), \stripos($mystring1, $findme));
        $this->assertEquals($findA($mystring2), \stripos($mystring2, $findme));
    }

    public function testStripos3()
    {
        $findme    = 'a';
        $mystring1 = 'xyz';
        $mystring2 = 'ABC';

        $pos1 = stripos3(1, $findme, $mystring1);
        $pos2 = stripos3(1, $findme, $mystring2);

        $this->assertEquals($pos1, \stripos($mystring1, $findme, 1));
        $this->assertEquals($pos2, \stripos($mystring2, $findme, 1));

        $findA = stripos3(1, $findme);
        $this->assertEquals($findA($mystring1), \stripos($mystring1, $findme, 1));
        $this->assertEquals($findA($mystring2), \stripos($mystring2, $findme, 1));
    }

    public function testStripslashes()
    {
        $str = "Is your name O\'reilly?";
        $this->assertEquals(stripslashes($str), \stripslashes($str));

        $stripslashes = stripslashes();
        $this->assertEquals($stripslashes($str), \stripslashes($str));
    }

    public function testStristr()
    {
        $str = 'This is a test foo';
        $this->assertEquals(stristr('test', $str), \stristr($str, 'test'));

        $afterTest = stristr('test');
        $this->assertEquals($afterTest($str), \stristr($str, 'test'));
    }

    public function testStristr3()
    {
        $str = 'This is a test foo';
        $this->assertEquals(stristr3(true, 'test', $str), \stristr($str, 'test', true));

        $beforeTest = stristr3(true, 'test');
        $this->assertEquals($beforeTest($str), \stristr($str, 'test', true));
    }

    public function testStrlen()
    {
        $str = 'This is a test';
        $this->assertEquals(strlen($str), \strlen($str));

        $strlen = strlen();
        $this->assertEquals($strlen($str), \strlen($str));
    }

    public function testStrnatcasecmp()
    {
        $a = 'A';
        $b = 'B';

        $this->assertEquals(strnatcasecmp($a, $b), \strnatcasecmp($a, $b));

        $cmpA = strnatcasecmp($a);
        $this->assertEquals($cmpA($b), \strnatcasecmp($a, $b));
    }

    public function testStrnatcmp()
    {
        $a = 'A';
        $b = 'B';
        $this->assertEquals(strnatcmp($a, $b), \strnatcmp($a, $b));

        $cmpA = strnatcmp($a);
        $this->assertEquals($cmpA($b), \strnatcmp($a, $b));
    }

    public function testStrncasecmp()
    {
        $a = 'This is a foo.';
        $b = 'This is a bar.';

        $this->assertEquals(strncasecmp(5, $a, $b), \strncasecmp($a, $b, 5));

        $cmpFirst5 = strncasecmp(5);
        $this->assertEquals($cmpFirst5($a, $b), \strncasecmp($a, $b, 5));
    }

    public function testStrncmp()
    {
        $a = 'This is a foo.';
        $b = 'This is a bar.';

        $this->assertEquals(strncmp(5, $a, $b), \strncmp($a, $b, 5));

        $cmpFirst5 = strncmp(5);
        $this->assertEquals($cmpFirst5($a, $b), \strncmp($a, $b, 5));
    }

    public function testStrpbrk()
    {
        $text = 'This is a Simple text.';
        $this->assertEquals(strpbrk('mi', $text), \strpbrk($text, 'mi'));

        $stripmi = strpbrk('mi');
        $this->assertEquals($stripmi($text), \strpbrk($text, 'mi'));
    }

    public function testStrpos()
    {
        $mystring = 'abc';
        $findme   = 'a';
        $this->assertEquals(strpos($findme, $mystring), \strpos($mystring, $findme));

        $findA = strpos($findme);
        $this->assertEquals($findA($mystring), \strpos($mystring, $findme));
    }

    public function testStrpos3()
    {
        $mystring = 'abc';
        $findme   = 'a';
        $this->assertEquals(strpos3(1, $findme, $mystring), \strpos($mystring, $findme, 1));

        $findAAfterFirst = strpos3(1, $findme);
        $this->assertEquals($findAAfterFirst($mystring), \strpos($mystring, $findme, 1));
    }

    public function testStrrchr()
    {
        $mystring = 'abc';
        $findme   = 'a';
        $this->assertEquals(strrchr($findme, $mystring), \strrchr($mystring, $findme));

        $findA = strrchr($findme);
        $this->assertEquals($findA($mystring), \strrchr($mystring, $findme));
    }

    public function testStrrev()
    {
        $a = 'abc';
        $this->assertEquals(strrev($a), \strrev($a));
        $strrev = strrev();
        $this->assertEquals($strrev($a), \strrev($a));
    }

    public function testStrripos()
    {
        $haystack = 'ababcd';
        $needle   = 'aB';

        $this->assertEquals(strripos($needle, $haystack), \strripos($haystack, $needle));

        $searchForNeedle = strripos($needle);
        $this->assertEquals($searchForNeedle($haystack), \strripos($haystack, $needle));
    }

    public function testStrripos3()
    {
        $haystack = 'ababcd';
        $needle   = 'aB';

        $this->assertEquals(strripos3(1, $needle, $haystack), \strripos($haystack, $needle, 1));

        $searchForNeedleAfter1 = strripos3(1, $needle);
        $this->assertEquals($searchForNeedleAfter1($haystack), \strripos($haystack, $needle, 1));
    }

    public function testStrrpos()
    {
        $haystack = 'ababcd';
        $needle   = 'aB';

        $this->assertEquals(strrpos($needle, $haystack), \strrpos($haystack, $needle));

        $searchForNeedle = strrpos($needle);
        $this->assertEquals($searchForNeedle($haystack), \strrpos($haystack, $needle));
    }

    public function testStrrpos3()
    {
        $haystack = 'ababcd';
        $needle   = 'aB';

        $this->assertEquals(strrpos3(1, $needle, $haystack), \strrpos($haystack, $needle, 1));

        $searchForNeedleAfter1 = strrpos3(1, $needle);
        $this->assertEquals($searchForNeedleAfter1($haystack), \strrpos($haystack, $needle, 1));
    }

    public function testStrspn()
    {
        $this->assertEquals(strspn("o", "foo"), \strspn("foo", "o"));
        $strspnOMask = strspn("o");
        $this->assertEquals($strspnOMask("foo"), \strspn("foo", "o"));
    }

    public function testStrspn3()
    {
        $this->assertEquals(strspn3(1, "o", "foo"), \strspn("foo", "o", 1));
        $strspnOMaskAfter1 = strspn3(1, "o");
        $this->assertEquals($strspnOMaskAfter1("foo"), \strspn("foo", "o", 1));
    }

    public function testStrspn4()
    {
        $this->assertEquals(strspn4(1, 2, "o", "foo"), \strspn("foo", "o", 1, 2));
        $strspnOMask1To2 = strspn4(1, 2, "o");
        $this->assertEquals($strspnOMask1To2("foo"), \strspn("foo", "o", 1, 2));
    }

    public function testStrstr()
    {
        $email  = 'name@example.com';
        $this->assertEquals(strstr('@', $email), \strstr($email, '@'));

        $searchAt = strstr('@');
        $this->assertEquals($searchAt($email), \strstr($email, '@'));
    }

    public function testStrstr3()
    {
        $email  = 'name@example.com';
        $this->assertEquals(strstr3(true, '@', $email), \strstr($email, '@', true));

        $searchBeforeAt = strstr3(true, '@');
        $this->assertEquals($searchBeforeAt($email), \strstr($email, '@', true));
    }

    public function testStrtok()
    {
        $str = 'This is a test';

        $tok = \strtok($str, ' ');
        $arr = [$tok];
        while ($tok !== false) {
            $tok = \strtok(' ');
            $arr[] = $tok;
        }

        $tok2 = strtok(' ', $str);
        $arr2 = [$tok2];
        while ($tok2 !== false) {
            $tok2 = strtok1(' ');
            $arr2[] = $tok2;
        }
        $this->assertEquals($arr, $arr2);

        $strtok = strtok(' ');
        $tok3 = $strtok($str);
        $arr3 = [$tok3];
        while ($tok3 !== false) {
            $tok3 = strtok1(' ');
            $arr3[] = $tok3;
        }

        $this->assertEquals($arr, $arr3);
    }

    public function testStrtolower()
    {
        $str = 'This has been a fine Test!';
        $this->assertEquals(strtolower($str), \strtolower($str));
        $strtolower = strtolower();
        $this->assertEquals($strtolower($str), \strtolower($str));
    }

    public function testStrtoupper()
    {
        $str = 'This has been a fine Test!';
        $this->assertEquals(strtoupper($str), \strtoupper($str));
        $strtoupper = strtoupper();
        $this->assertEquals($strtoupper($str), \strtoupper($str));
    }

    public function testStrtr3Params()
    {
        $this->assertEquals(strtr("ab", "01", "baab"), \strtr("baab", "ab", "01"));

        $strtr = strtr();
        $strtrSwapabWith01 = $strtr("ab", "01");
        $this->assertEquals($strtrSwapabWith01("baab"), \strtr("baab", "ab", "01"));
    }

    public function testStrtr2Params()
    {
        $trans = ["h" => "-", "hello" => "hi", "hi" => "hello"];
        $str = "hi all, I said hello";
        $this->assertEquals(strtr($trans, $str), \strtr($str, $trans));

        $strtr = strtr();
        $strTranslateSwapHiHello = $strtr($trans);
        $this->assertEquals($strTranslateSwapHiHello($str), \strtr($str, $trans));
    }

    public function testSubstrCompare()
    {
        $a = "abcde";
        $b = "bc";

        $this->assertEquals(substr_compare(1, $b, $a), \substr_compare($a, $b, 1));

        $cmp1 = substr_compare(1);
        $this->assertEquals($cmp1($b, $a), \substr_compare($a, $b, 1));
    }

    public function testSubstrCompare4()
    {
        $a = "abcde";
        $b = "bc";

        $this->assertEquals(substr_compare4(2, 1, $b, $a), \substr_compare($a, $b, 1, 2));
        $cmp1 = substr_compare4(2, 1);
        $this->assertEquals($cmp1($b, $a), \substr_compare($a, $b, 1, 2));
    }

    public function testSubstrCompare5()
    {
        $a = "abcde";
        $b = "BC";

        $this->assertEquals(substr_compare5(true, 2, 1, $b, $a), \substr_compare($a, $b, 1, 2, true));

        $cmp = substr_compare5(true, 2, 1);
        $this->assertEquals($cmp($b, $a), \substr_compare($a, $b, 1, 2, true));
    }

    public function testSubstrCount()
    {
        $text = 'This is a test';
        $this->assertEquals(substr_count('is', $text), \substr_count($text, 'is'));

        $countIs = substr_count('is');
        $this->assertEquals($countIs($text), \substr_count($text, 'is'));
    }

    public function testSubstrCount3()
    {
        $text = 'This is a test';
        $this->assertEquals(substr_count3(3, 'is', $text), \substr_count($text, 'is', 3));

        $countIsAfter3 = substr_count3(3, 'is');
        $this->assertEquals($countIsAfter3($text), \substr_count($text, 'is', 3));
    }

    public function testSubstrCount4()
    {
        $text = 'This is a test';

        $this->assertEquals(substr_count4(4, 3, 'is', $text), \substr_count($text, 'is', 3, 4)); // 2
        $countIsFrom3To7 = substr_count4(4, 3, 'is');
        $this->assertEquals($countIsFrom3To7($text), \substr_count($text, 'is', 3, 4));
    }

    public function testSubstrReplace()
    {
        $str = 'ABCDEFGH:/MNRPQR/';
        $this->assertEquals(substr_replace(0, 'bob', $str), \substr_replace($str, 'bob', 0));

        $replaceStrWithBob = substr_replace(0, 'bob');
        $this->assertEquals($replaceStrWithBob($str), \substr_replace($str, 'bob', 0));
    }

    public function testSubstrReplace4()
    {
        $str = 'ABCDEFGH:/MNRPQR/';
        $this->assertEquals(
            substr_replace4(strlen($str), 0, 'bob', $str),
            \substr_replace($str, 'bob', 0, strlen($str))
        );

        $replaceStrWithBob = substr_replace4(strlen($str), 0, 'bob');
        $this->assertEquals(
            $replaceStrWithBob($str),
            \substr_replace($str, 'bob', 0, strlen($str))
        );
    }

    public function testSubstr()
    {
        $this->assertEquals(substr(-1, "abcdef"), \substr("abcdef", -1));

        $takeLast = substr(-1);
        $this->assertEquals($takeLast("abcdef"), \substr("abcdef", -1));
    }

    public function testSubstr3()
    {
        $this->assertEquals(substr3(1, -3, "abcdef"), \substr("abcdef", -3, 1));
        $takeThirdFromEnd = substr3(1, -3);
        $this->assertEquals($takeThirdFromEnd("abcdef"), \substr("abcdef", -3, 1));
    }

    public function testTrim()
    {
        $str = " abcd \n";
        $this->assertEquals(trim($str), \trim($str));

        $trim = trim();
        $this->assertEquals($trim($str), \trim($str));
    }

    public function testTrim2()
    {
        $str = " abcdx";
        $this->assertEquals(trim2("x", $str), \trim($str, "x"));

        $trimX = trim2("x");
        $this->assertEquals($trimX($str), \trim($str, "x"));
    }

    public function testUcFirst()
    {
        $str = "abcd";
        $this->assertEquals(ucfirst($str), \ucfirst($str));
        $ucfirst = ucfirst();
        $this->assertEquals($ucfirst($str), \ucfirst($str));
    }

    public function testUcWords()
    {
        $str = "hello world!";
        $this->assertEquals(ucwords($str), \ucwords($str));
        $ucwords = ucwords();
        $this->assertEquals($ucwords($str), \ucwords($str));
    }

    public function testUcWords2()
    {
        $str = "hello|world!";
        $this->assertEquals(ucwords2("|", $str), \ucwords($str, "|"));
        $ucWordsSplitByPipe = ucwords2("|");
        $this->assertEquals($ucWordsSplitByPipe($str), \ucwords($str, "|"));
    }

    public function testWordwrap()
    {
        $str = "The quick brown fox jumps over the lazy dog.";
        $this->assertEquals(wordwrap($str), \wordwrap($str));
        $wordwrap = wordwrap();

        $this->assertEquals($wordwrap($str), \wordwrap($str));
    }

    public function testWordwrap2()
    {
        $str = "The quick brown fox jumps over the lazy dog.";
        $this->assertEquals(wordwrap2(10, $str), \wordwrap($str, 10));
        $wordwrap10 = wordwrap2(10);

        $this->assertEquals($wordwrap10($str), \wordwrap($str, 10));
    }

    public function testWordwrap3()
    {
        $str = "The quick brown fox jumps over the lazy dog.";
        $this->assertEquals(wordwrap3('<br/>', 10, $str), \wordwrap($str, 10, '<br/>'));
        $wordwrap10 = wordwrap3('<br/>', 10);

        $this->assertEquals($wordwrap10($str), \wordwrap($str, 10, '<br/>'));
    }

    public function testWordwrap4()
    {
        $str = "The quick brown fox jumps over the lazy dog.";
        $this->assertEquals(wordwrap4(true, '<br/>', 10, $str), \wordwrap($str, 10, '<br/>', true));
        $wordwrap10 = wordwrap4(true, '<br/>', 10);

        $this->assertEquals($wordwrap10($str), \wordwrap($str, 10, '<br/>', true));
    }

    public function testArrayChangeKeyCase()
    {
        $arr = ["FirSt" => 1, "SecOnd" => 4];

        $this->assertEquals(array_change_key_case($arr), \array_change_key_case($arr));

        $changeKeyCase = array_change_key_case();
        $this->assertEquals($changeKeyCase($arr), \array_change_key_case($arr));
    }

    public function testArrayChangeKeyCase2()
    {
        $arr = ["FirSt" => 1, "SecOnd" => 4];
        $this->assertEquals(array_change_key_case2(CASE_UPPER, $arr), \array_change_key_case($arr, CASE_UPPER));

        $upperKeys = array_change_key_case2(CASE_UPPER);
        $this->assertEquals($upperKeys($arr), \array_change_key_case($arr, CASE_UPPER));
    }

    public function testArrayChunk()
    {
        $arr = ['a', 'b', 'c', 'd', 'e'];
        $this->assertEquals(array_chunk(2, $arr), \array_chunk($arr, 2));

        $chunk2 = array_chunk(2);
        $this->assertEquals($chunk2($arr), \array_chunk($arr, 2));
    }

    public function testArrayChunk3()
    {
        $arr = ['a', 'b', 'c', 'd', 'e'];
        $this->assertEquals(array_chunk3(true, 2, $arr), \array_chunk($arr, 2, true));

        $chunk2 = array_chunk3(true, 2);
        $this->assertEquals($chunk2($arr), \array_chunk($arr, 2, true));
    }

    public function testArrayColumn()
    {
        $records = [
            [
                'id' => 2135,
                'first_name' => 'John',
                'last_name' => 'Doe'
            ],
            [
                'id' => 3245,
                'first_name' => 'Sally',
                'last_name' => 'Smith'
            ],
            [
                'id' => 5342,
                'first_name' => 'Jane',
                'last_name' => 'Jones'
            ],
            [
                'id' => 5623,
                'first_name' => 'Peter',
                'last_name' => 'Doe'
            ]
        ];

        $this->assertEquals(array_column('first_name', $records), \array_column($records, 'first_name'));
        $firstNames = array_column('first_name');
        $this->assertEquals($firstNames($records), \array_column($records, 'first_name'));
    }

    public function testArrayColumn3()
    {
        $records = [
            [
                'id' => 2135,
                'first_name' => 'John',
                'last_name' => 'Doe'
            ],
            [
                'id' => 3245,
                'first_name' => 'Sally',
                'last_name' => 'Smith'
            ],
            [
                'id' => 5342,
                'first_name' => 'Jane',
                'last_name' => 'Jones'
            ],
            [
                'id' => 5623,
                'first_name' => 'Peter',
                'last_name' => 'Doe'
            ]
        ];

        $this->assertEquals(array_column3('id', 'first_name', $records), \array_column($records, 'first_name', 'id'));
        $firstNames = array_column3('id', 'first_name');
        $this->assertEquals($firstNames($records), \array_column($records, 'first_name', 'id'));
    }

    public function testArrayCombine()
    {
        $a = ['green', 'red', 'yellow'];
        $b = ['avocado', 'apple', 'banana'];
        $this->assertEquals(array_combine($a, $b), \array_combine($a, $b));

        $combineA = array_combine($a);
        $this->assertEquals($combineA($b), \array_combine($a, $b));
    }

    public function testArrayCountValues()
    {
        $a = ['a', 'b', 'c', 'd', 'e', 'f'];
        $this->assertEquals(array_count_values($a), \array_count_values($a));

        $countVals = array_count_values();
        $this->assertEquals($countVals($a), \array_count_values($a));
    }

    public function testArrayDiffAssoc()
    {
        $a = ['a', 'b', 'c', 'd'];
        $b = ['c', 'd', 'e', 'f'];

        $this->assertEquals(array_diff_assoc($a, $b), \array_diff_assoc($a, $b));

        $diffA = array_diff_assoc($a);
        $this->assertEquals($diffA($b), \array_diff_assoc($a, $b));
    }

    public function testArrayDiffKey()
    {
        $a = ['blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4];
        $b = ['green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8];

        $this->assertEquals(array_diff_key($a, $b), \array_diff_key($a, $b));
        $diffA = array_diff_key($a);
        $this->assertEquals($diffA($b), \array_diff_key($a, $b));
    }

    public function testArrayDiffUAssoc()
    {
        $a = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
        $b = ['a' => 'green', 'yellow', 'red'];
        $func = function ($a, $b) {
            if ($a === $b) {
                return 0;
            }

            return $a > $b ? 1 : -1;
        };

        $this->assertEquals(array_diff_uassoc($func, $a, $b), \array_diff_uassoc($a, $b, $func));
        $diffFunc = array_diff_uassoc($func);
        $this->assertEquals($diffFunc($a, $b), \array_diff_uassoc($a, $b, $func));
    }

    public function testArrayDiffUKey()
    {
        $func = function ($key1, $key2) {
            if ($key1 === $key2) {
                return 0;
            } elseif ($key1 > $key2) {
                return 1;
            } else {
                return -1;
            }
        };

        $a = ['blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4];
        $b = ['green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8];
        $this->assertEquals(array_diff_ukey($func, $a, $b), \array_diff_ukey($a, $b, $func));

        $diffFunc = array_diff_ukey($func);
        $this->assertEquals($diffFunc($a, $b), \array_diff_ukey($a, $b, $func));
    }

    public function testArrayDiff()
    {
        $a = ['a' => 'green', 'red', 'blue', 'red'];
        $b = ['b' => 'green', 'yellow', 'red'];

        $this->assertEquals(array_diff($a, $b), \array_diff($a, $b));
        $diffA = array_diff($a);
        $this->assertEquals($diffA($b), \array_diff($a, $b));
    }

    public function testArrayFillKeys()
    {
        $keys = ['foo', 5, 10, 'bar'];
        $this->assertEquals(array_fill_keys('banana', $keys), \array_fill_keys($keys, 'banana'));

        $fillKeysBanana = array_fill_keys('banana');
        $this->assertEquals($fillKeysBanana($keys), \array_fill_keys($keys, 'banana'));
    }

    public function testArrayFill()
    {
        $this->assertEquals(array_fill(6, 5, 'banana'), \array_fill(5, 6, 'banana'));

        $fill6StartingAt5 = array_fill(6, 5);
        $this->assertEquals($fill6StartingAt5('banana'), \array_fill(5, 6, 'banana'));
    }

    public function testArrayFilter()
    {
        $a = ['foo', false, -1, null, ''];
        $this->assertEquals(array_filter($a), \array_filter($a));
        $filter = array_filter();
        $this->assertEquals($filter($a), \array_filter($a));
    }

    public function testArrayFilter2()
    {
        $a = [1, 2, 3, 4, 5];
        $isEven = function ($x) {
            return $x % 2 === 0;
        };
        $this->assertEquals(array_filter2($isEven, $a), \array_filter($a, $isEven));

        $filterEvens = array_filter2($isEven);
        $this->assertEquals($filterEvens($a), \array_filter($a, $isEven));
    }

    public function testArrayFilter3()
    {
        $a = ['a' => 20, 'b' => 10, 'c' => 5, 'd' => 0];
        $notA = function ($x) {
            return $x !== 'a';
        };

        $this->assertEquals(
            array_filter3(ARRAY_FILTER_USE_KEY, $notA, $a),
            \array_filter($a, $notA, ARRAY_FILTER_USE_KEY)
        );

        $filterKeys = array_filter3(ARRAY_FILTER_USE_KEY);
        $filterKeysThatArentA = $filterKeys($notA);
        $this->assertEquals(
            $filterKeysThatArentA($a),
            \array_filter($a, $notA, ARRAY_FILTER_USE_KEY)
        );
    }

    public function testArrayFlip()
    {
        $arr = ['oranges', 'apples', 'pears'];
        $this->assertEquals(array_flip($arr), \array_flip($arr));

        $arrayFlip = array_flip();
        $this->assertEquals($arrayFlip($arr), \array_flip($arr));
    }

    public function testArrayIntersectAssoc()
    {
        $arr = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
        $arr2 = ["a" => "green", "b" => "yellow", "blue", "red"];
        $result_array = array_intersect_assoc($arr, $arr2);

        $this->assertEquals(
            array_intersect_assoc($arr, $arr2),
            \array_intersect_assoc($arr, $arr2)
        );

        $arrayIntersectArr = array_intersect_assoc($arr);
        $this->assertEquals(
            $arrayIntersectArr($arr2),
            \array_intersect_assoc($arr, $arr2)
        );
    }

    public function testArrayIntersectKey()
    {
        $a = ['blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4];
        $b = ['green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8];
        $this->assertEquals(array_intersect_key($a, $b), \array_intersect_key($a, $b));

        $intersect = array_intersect_key($a);
        $this->assertEquals($intersect($b), \array_intersect_key($a, $b));
    }

    public function testArrayIntersectUAssoc()
    {
        $arr1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
        $arr2 = ["a" => "GREEN", "B" => "brown", "yellow", "red"];

        $this->assertEquals(
            array_intersect_uassoc(strcasecmp(), $arr1, $arr2),
            \array_intersect_uassoc($arr1, $arr2, 'strcasecmp')
        );
    }

    public function testArrayIntersectUKey()
    {
        $keyCompare = function ($key1, $key2) {
            if ($key1 === $key2) {
                return 0;
            } elseif ($key1 > $key2) {
                return 1;
            }
            return -1;
        };

        $a = ['blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4];
        $b = ['green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8];

        $this->assertEquals(
            array_intersect_ukey($keyCompare, $a, $b),
            \array_intersect_ukey($a, $b, $keyCompare)
        );

        $arrKeyComp = array_intersect_ukey($keyCompare);
        $this->assertEquals($arrKeyComp($a, $b), \array_intersect_ukey($a, $b, $keyCompare));
    }

    public function testArrayIntersect()
    {
        $arr1 = ["a" => "green", "red", "blue"];
        $arr2 = ["b" => "green", "yellow", "red"];
        $this->assertEquals(array_intersect($arr1, $arr2), \array_intersect($arr1, $arr2));

        $intersect1 = array_intersect($arr1);
        $this->assertEquals($intersect1($arr2), \array_intersect($arr1, $arr2));
    }

    public function testArrayKeyExists()
    {
        $arr = ["a" => "green", "b" => "blue"];
        $this->assertEquals(array_key_exists('a', $arr), \array_key_exists('a', $arr));
        $arrHasKeyA = array_key_exists('a');
        $this->assertEquals($arrHasKeyA($arr), \array_key_exists('a', $arr));
    }

    public function testKeyExists()
    {
        $arr = ["a" => "green", "b" => "blue"];
        $this->assertEquals(key_exists('a', $arr), \key_exists('a', $arr));
        $arrHasKeyA = key_exists('a');
        $this->assertEquals($arrHasKeyA($arr), \key_exists('a', $arr));
    }

    public function testArrayKeys()
    {
        $arr = ["a" => "green", "b" => "blue"];
        $this->assertEquals(array_keys($arr), \array_keys($arr));
        $arrKeys = array_keys();
        $this->assertEquals($arrKeys($arr), \array_keys($arr));
    }

    public function testArrayKeys2()
    {
        $arr = ['a', 'b', 'c', 'd', 'a', 'b', 'a'];
        $this->assertEquals(array_keys2('a', $arr), \array_keys($arr, 'a'));
        $aKeys = array_keys2('a');
        $this->assertEquals($aKeys($arr), \array_keys($arr, 'a'));
    }

    public function testArrayKeys3()
    {
        $arr = ['a', 'b', 'c', 'd', 'a', 'b', 'a'];
        $this->assertEquals(array_keys3(true, 'a', $arr), \array_keys($arr, 'a', true));
        $aKeys = array_keys3(true, 'a');
        $this->assertEquals($aKeys($arr), \array_keys($arr, 'a', true));
    }

    public function testArrayMap()
    {
        $arr = [1, 2, 3, 4];
        $f = function ($x) {
            return $x + 1;
        };
        $this->assertEquals(array_map($f, $arr), \array_map($f, $arr));
        $addOne = array_map($f);
        $this->assertEquals($addOne($arr), \array_map($f, $arr));
    }

    public function testArrayMergeRecursive()
    {
        $ar1 = ["color" => ["favorite" => "red"], 5];
        $ar2 = [10, "color" => ["favorite" => "green", "blue"]];
        $this->assertEquals(array_merge_recursive($ar1, $ar2), \array_merge_recursive($ar1, $ar2));
        $mergeAr1 = array_merge_recursive($ar1);
        $this->assertEquals($mergeAr1($ar2), \array_merge_recursive($ar1, $ar2));
    }

    public function testArrayMerge()
    {
        $arr1 = ["color" => "red", 2, 4];
        $arr2 = ["a", "b", "color" => "green", "shape" => "trapezoid", 4];
        $result = array_merge($arr1, $arr2);
        $this->assertEquals(array_merge($arr1, $arr2), \array_merge($arr1, $arr2));
        $mergeArr1 = array_merge($arr1);
        $this->assertEquals($mergeArr1($arr2), \array_merge($arr1, $arr2));
    }

    public function testArrayPad()
    {
        $arr = [12, 10, 9];
        $this->assertEquals(array_pad(5, 0, $arr), \array_pad($arr, 5, 0));
        $padTo5WithZero = array_pad(5, 0);
        $this->assertEquals($padTo5WithZero($arr), \array_pad($arr, 5, 0));
    }

    public function testArrayProduct()
    {
        $arr = [1, 2, 3, 4];
        $this->assertEquals(array_product($arr), \array_product($arr));
        $prod = array_product();
        $this->assertEquals($prod($arr), \array_product($arr));
    }

    public function testArrayRand()
    {
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $x = array_rand($arr);
        $this->assertGreaterThanOrEqual(0, $x);
        $this->assertLessThanOrEqual(9, $x);

        $arrRand = array_rand();
        $y = $arrRand($arr);
        $this->assertGreaterThanOrEqual(0, $y);
        $this->assertLessThanOrEqual(9, $y);
    }

    public function testArrayRand2()
    {
        $input = ["Neo", "Morpheus", "Trinity", "Cypher", "Tank"];
        $randKeys = array_rand2(2, $input);
        $this->assertCount(2, $randKeys);
        foreach ($randKeys as $val) {
            $this->assertTrue($val >= 0);
            $this->assertTrue($val <= 4);
            $this->assertTrue(\in_array($input[$val], $input));
        }
    }

    public function testArrayReduce()
    {
        $arr = [1, 2, 3, 4];
        $f = function ($sum, $x) {
            return $sum + $x;
        };
        $this->assertEquals(
            array_reduce($f, 0, $arr),
            \array_reduce($arr, $f, 0)
        );

        $sumArr = array_reduce($f);
        $sumArrStartingAt5 = $sumArr(5);
        $this->assertEquals($sumArrStartingAt5($arr), \array_reduce($arr, $f, 5));
    }

    public function testArrayReplaceRecursive()
    {
        $base = ['citrus' => ['orange'], 'berries' => ['blackberry', 'raspberry']];
        $replacements = ['citrus' => ['pineapple'], 'berries' => ['blueberry']];

        $this->assertEquals(
            array_replace_recursive($replacements, $base),
            \array_replace_recursive($base, $replacements)
        );

        $replace = array_replace_recursive($replacements);
        $this->assertEquals(
            $replace($base),
            \array_replace_recursive($base, $replacements)
        );
    }

    public function testArrayReplace()
    {
        $base = ["orange", "banana", "apple", "raspberry"];
        $replacements = [0 => "pineapple", 4 => "cherry"];

        $this->assertEquals(
            array_replace($replacements, $base),
            \array_replace($base, $replacements)
        );

        $replace = array_replace($replacements);
        $this->assertEquals($replace($base), \array_replace($base, $replacements));
    }

    public function testArrayReverse()
    {
        $arr = ['php', 4.0, ['green', 'red']];
        $this->assertEquals(array_reverse($arr), \array_reverse($arr));
        $reverse = array_reverse();
        $this->assertEquals($reverse($arr), \array_reverse($arr));
    }

    public function testArrayReverse2()
    {
        $arr = ['php', 4.0, ['green', 'red']];
        $this->assertEquals(array_reverse2(true, $arr), \array_reverse($arr, true));
        $reverseKeepKeys = array_reverse2(true);
        $this->assertEquals($reverseKeepKeys($arr), \array_reverse($arr, true));
    }

    public function testArraySearch()
    {
        $arr = ['blue', 'red', 'green', 'red'];
        $this->assertEquals(array_search('green', $arr), \array_search('green', $arr));
        $searchForGreen = array_search('green');
        $this->assertEquals($searchForGreen($arr), \array_search('green', $arr));
    }

    public function testArraySearch3()
    {
        $arr = ['blue', 'red', 'green', 'red'];
        $this->assertEquals(array_search3(true, 'green', $arr), \array_search('green', $arr, true));
        $strictSearchForGreen = array_search3(true, 'green');
        $this->assertEquals($strictSearchForGreen($arr), \array_search('green', $arr, true));
    }

    public function testArraySlice()
    {
        $arr = [0, 1, 2, 3];
        $this->assertEquals(array_slice(1, $arr), \array_slice($arr, 1));
        $sliceAfter1 = array_slice(1);
        $this->assertEquals($sliceAfter1($arr), \array_slice($arr, 1));
    }

    public function testArraySlice3()
    {
        $arr = [0, 1, 2, 3];
        $this->assertEquals(array_slice3(2, 1, $arr), \array_slice($arr, 1, 2));
        $slice1To2 = array_slice3(2, 1);
        $this->assertEquals($slice1To2($arr), \array_slice($arr, 1, 2));
    }

    public function testArraySlice4()
    {
        $arr = [0, 1, 2, 3];
        $this->assertEquals(array_slice4(true, 2, 1, $arr), \array_slice($arr, 1, 2, true));
        $slice1To2 = array_slice4(true, 2, 1);
        $this->assertEquals($slice1To2($arr), \array_slice($arr, 1, 2, true));
    }

    public function testArraySum()
    {
        $arr = [1, 2, 3, 4];
        $this->assertEquals(array_sum($arr), \array_sum($arr));
        $sumArr = array_sum();
        $this->assertEquals($sumArr($arr), \array_sum($arr));
    }

    public function testArrayUDiffAssoc()
    {
        $a = [
            0 => 5,
            1 => 4,
            2 => 3,
            3 => 2,
            4 => 1,
            5 => 0
        ];
        $b = [
            6 => 1,
            5 => 2,
            4 => 3,
            3 => 4,
            2 => 7,
            1 => 6
        ];
        $f = function ($x, $y) {
            return $x - $y;
        };
        $this->assertEquals(array_udiff_assoc($f, $a, $b), \array_udiff_assoc($a, $b, $f));
        $diff = array_udiff_assoc($f);
        $this->assertEquals($diff($a, $b), \array_udiff_assoc($a, $b, $f));
    }

    public function testArrayUDiffUAssoc()
    {
        $keyCmp = function ($a, $b) {
            if ($a === $b) {
                return 0;
            }
            return $b > $a ? -1 : 1;
        };

        $valueCmp = function ($a, $b) {
            if ($a === $b) {
                return 0;
            }
            return $a > $b ? -1 : 1;
        };

        $a1 = ['a' => 'red', 'b' => 'green', 'c' => 'blue'];
        $a2 = ['a' => 'red', 'b' => 'green', 'c' => 'green'];

        $this->assertEquals(
            array_udiff_uassoc($keyCmp, $valueCmp, $a1, $a2),
            \array_udiff_uassoc($a1, $a2, $keyCmp, $valueCmp)
        );

        $diff = array_udiff_uassoc($keyCmp, $valueCmp);
        $this->assertEquals(
            $diff($a1, $a2),
            \array_udiff_uassoc($a1, $a2, $keyCmp, $valueCmp)
        );
    }

    public function testArrayUDiff()
    {
        $cmp = function ($a, $b) {
            if ($a === $b) {
                return 0;
            }
            return $b > $a ? -1 : 1;
        };

        $a1 = ['a' => 'red', 'b' => 'green', 'c' => 'blue'];
        $a2 = ['a' => 'red', 'b' => 'green', 'e' => 'green'];

        $this->assertEquals(array_udiff($cmp, $a1, $a2), \array_udiff($a1, $a2, $cmp));
        $diff = array_udiff($cmp);
        $this->assertEquals($diff($a1, $a2), \array_udiff($a1, $a2, $cmp));
    }

    public function testArrayUIntersect()
    {
        $arr1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
        $arr2 = ["a" => "GREEN", "B" => "brown", "yellow", "red"];

        $this->assertEquals(
            array_uintersect("strcasecmp", $arr1, $arr2),
            \array_uintersect($arr1, $arr2, "strcasecmp")
        );

        $uintersectStrCaseCmp = array_uintersect("strcasecmp");
        $this->assertEquals(
            $uintersectStrCaseCmp($arr1, $arr2),
            \array_uintersect($arr1, $arr2, "strcasecmp")
        );
    }

    public function testArrayUIntersectAssoc()
    {
        $arr1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
        $arr2 = ["a" => "GREEN", "B" => "brown", "yellow", "red"];

        $this->assertEquals(
            array_uintersect_assoc("strcasecmp", $arr1, $arr2),
            \array_uintersect_assoc($arr1, $arr2, "strcasecmp")
        );

        $intersectStrCaseCmp = array_uintersect_assoc("strcasecmp");
        $this->assertEquals(
            $intersectStrCaseCmp($arr1, $arr2),
            \array_uintersect_assoc($arr1, $arr2, "strcasecmp")
        );
    }

    public function testArrayUIntersectUAssoc()
    {
        $arr1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
        $arr2 = ["a" => "GREEN", "B" => "brown", "yellow", "red"];

        $this->assertEquals(
            array_uintersect_uassoc("strcasecmp", "strcmp", $arr1, $arr2),
            \array_uintersect_uassoc($arr1, $arr2, "strcasecmp", "strcmp")
        );

        $intersect = array_uintersect_uassoc("strcasecmp", "strcmp");
        $this->assertEquals(
            $intersect($arr1, $arr2),
            \array_uintersect_uassoc($arr1, $arr2, "strcasecmp", "strcmp")
        );
    }

    public function testArrayUnique()
    {
        $arr = [1, 2, 3, 1, 2, 3, 4];
        $this->assertEquals(array_unique($arr), \array_unique($arr));
        $arrUnique = array_unique();
        $this->assertEquals($arrUnique($arr), \array_unique($arr));
    }

    public function testArrayUnique2()
    {
        $arr = ['1', '2', '3', '1', '2', '3', '4'];
        $this->assertEquals(array_unique2(SORT_NUMERIC, $arr), \array_unique($arr, SORT_NUMERIC));
        $uniqueSortNumeric = array_unique2(SORT_NUMERIC);
        $this->assertEquals($uniqueSortNumeric($arr), \array_unique($arr, SORT_NUMERIC));
    }

    public function testCount()
    {
        $arr = [1, 2, 3, 4];
        $this->assertEquals(count($arr), \count($arr));
        $count = count();
        $this->assertEquals($count($arr), \count($arr));
    }

    public function testCount2()
    {
        $arr = [[1, 2], [3, 4]];
        $this->assertEquals(count2(COUNT_RECURSIVE, $arr), \count($arr, COUNT_RECURSIVE));
        $deepCount = count2(COUNT_RECURSIVE);
        $this->assertEquals($deepCount($arr), \count($arr, COUNT_RECURSIVE));
    }

    public function testSizeof()
    {
        $arr = [1, 2, 3, 4];
        $this->assertEquals(sizeof($arr), sizeof($arr));
        $sizeof = sizeof();
        $this->assertEquals($sizeof($arr), sizeof($arr));
    }

    public function testSizeof2()
    {
        $arr = [[1, 2], [3, 4]];
        $this->assertEquals(sizeof2(COUNT_RECURSIVE, $arr), \sizeof($arr, COUNT_RECURSIVE));
        $deepCount = sizeof2(COUNT_RECURSIVE);
        $this->assertEquals($deepCount($arr), \sizeof($arr, COUNT_RECURSIVE));
    }

    public function testInArray()
    {
        $arr = ['foo', 'bar'];
        $this->assertEquals(in_array('foo', $arr), \in_array('foo', $arr));
        $inArray = in_array('foo');
        $this->assertEquals($inArray($arr), \in_array('foo', $arr));
    }

    public function testInArray3()
    {
        $arr = [1, 2, 3];
        $this->assertEquals(in_array3(true, '1', $arr), \in_array('1', $arr, true));
        $inArray = in_array3(true, '1');
        $this->assertEquals($inArray($arr), \in_array('foo', $arr, true));
    }

    public function testRange()
    {
        $this->assertEquals(range(2, 5), \range(2, 5));
        $startAt2 = range(2);
        $this->assertEquals($startAt2(5), \range(2, 5));
    }

    public function testRange3()
    {
        $this->assertEquals(range3(10, 2, 30), \range(2, 30, 10));
        $step10StartAt2 = range3(10, 2);
        $this->assertEquals($step10StartAt2(30), \range(2, 30, 10));
    }

    public function testShuffle()
    {
        // Make it highly unlikely that the shuffled array would
        // come back to the same settings.
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
        $shuffled = shuffle($arr);

        $this->assertNotEquals($shuffled, $arr);
        $this->assertCount(15, $arr);
        $this->assertCount(15, $shuffled);

        $shuffle = shuffle();
        $shuffledArr = $shuffle($arr);
        $this->assertNotEquals($arr, $shuffledArr);
        $this->assertCount(15, $arr);
        $this->assertCount(15, $shuffledArr);
    }

    public function testRSort()
    {
        $arr = [1, 2, 3];
        $this->assertEquals(rsort($arr), [3, 2, 1]);
        $this->assertEquals($arr, [1, 2, 3]);

        $rsort = rsort();
        $this->assertEquals($rsort($arr), [3, 2, 1]);
        $this->assertEquals($arr, [1, 2, 3]);
    }

    public function testRSort2()
    {
        $arr = ['1', '2', '3'];
        $this->assertEquals(rsort2(SORT_NUMERIC, $arr), ['3', '2', '1']);
        $this->assertEquals($arr, ['1', '2', '3']);

        $numericReverseSort = rsort2(SORT_NUMERIC);
        $this->assertEquals($numericReverseSort($arr), ['3', '2', '1']);
    }

    public function testKrSort()
    {
        $arr = ['1' => 3, '2' => 2, '3' => 1];
        $this->assertEquals(krsort($arr), ['3' => 1, '2' => 2, '1' => 3]);
        $this->assertEquals($arr, ['1' => 3, '2' => 2, '3' => 1]);

        $reverseKeySort = krsort();
        $this->assertEquals($reverseKeySort($arr), ['3' => 1, '2' => 2, '1' => 3]);
    }

    public function testKrSort2()
    {
        $arr = ['1' => 3, '2' => 2, '3' => 1];
        $this->assertEquals(krsort2(SORT_NUMERIC, $arr), ['3' => 1, '2' => 2, '1' => 3]);
        $this->assertEquals($arr, ['1' => 3, '2' => 2, '3' => 1]);

        $reverseKeySort = krsort2(SORT_NUMERIC);
        $this->assertEquals($reverseKeySort($arr), ['3' => 1, '2' => 2, '1' => 3]);
    }

    public function testKSort()
    {
        $fruits = ['d' => 'lemon', 'a' => 'orange', 'b' => 'banana', 'c' => 'apple'];
        $expected = ['a' => 'orange', 'b' => 'banana', 'c' => 'apple', 'd' => 'lemon'];
        $this->assertTrue(ksort($fruits) === $expected);
        $this->assertFalse($fruits === $expected);

        $ksort = ksort();
        $this->assertTrue($ksort($fruits) === $expected);
        $this->assertFalse($fruits === $expected);
    }

    public function testKSort2()
    {
        $fruits = ['1' => 'lemon', '3' => 'orange', '2' => 'banana', '0' => 'apple'];
        $expected = ['0' => 'apple', '1' => 'lemon', '2' => 'banana', '3' => 'orange'];
        $this->assertTrue(ksort2(SORT_NUMERIC, $fruits) === $expected);
        $this->assertFalse($fruits === $expected);

        $ksort = ksort2(SORT_NUMERIC);
        $this->assertTrue($ksort($fruits) === $expected);
        $this->assertFalse($fruits === $expected);
    }

    public function testNatCaseSort()
    {
        $arr = ['IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png'];
        $expected = [
            0 => 'IMG0.png',
            4 => 'img1.png',
            3 => 'img2.png',
            5 => 'IMG3.png',
            2 => 'img10.png',
            1 => 'img12.png'
        ];
        $this->assertTrue(natcasesort($arr) === $expected);
        $this->assertFalse($arr === $expected);

        $natCaseSort = natcasesort();
        $this->assertTrue($natCaseSort($arr) === $expected);
        $this->assertFalse($arr === $expected);
    }

    public function testNatSort()
    {
        $arr = ["img12.png", "img10.png", "img2.png", "img1.png"];
        $expected = [
            3 => 'img1.png',
            2 => 'img2.png',
            1 => 'img10.png',
            0 => 'img12.png'
        ];

        $this->assertTrue(natsort($arr) === $expected);
        $this->assertFalse($arr === $expected);

        $natSort = natsort();
        $this->assertTrue($natSort($arr) === $expected);
        $this->assertFalse($arr === $expected);
    }

    public function testArSort()
    {
        $fruits = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
        $expected = [
            'a' => 'orange',
            'd' => 'lemon',
            'b' => 'banana',
            'c' => 'apple'
        ];

        $this->assertTrue(arsort($fruits) === $expected);
        $this->assertFalse($fruits === $expected);

        $arsort = arsort();
        $this->assertTrue($arsort($fruits) === $expected);
        $this->assertFalse($fruits === $expected);
    }

    public function testArSort2()
    {
        $fruits = ["d" => "3", "a" => "4", "b" => "2", "c" => "1"];
        $expected = [
            'a' => '4',
            'd' => '3',
            'b' => '2',
            'c' => '1'
        ];

        $this->assertTrue(arsort2(SORT_NUMERIC, $fruits) === $expected);
        $this->assertFalse($fruits === $expected);

        $arsort = arsort2(SORT_NUMERIC);
        $this->assertTrue($arsort($fruits) === $expected);
        $this->assertFalse($fruits === $expected);
    }

    public function testASort()
    {
        $fruits = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
        $expected = [
            'c' => 'apple',
            'b' => 'banana',
            'd' => 'lemon',
            'a' => 'orange'
        ];

        $this->assertTrue(asort($fruits) === $expected);
        $this->assertFalse($fruits === $expected);

        $asort = asort();
        $this->assertTrue($asort($fruits) === $expected);
        $this->assertFalse($fruits === $expected);
    }

    public function testASort2()
    {
        $fruits = ["d" => "3", "a" => "4", "b" => "2", "c" => "1"];
        $expected = [
            'c' => '1',
            'b' => '2',
            'd' => '3',
            'a' => '4'
        ];

        $this->assertTrue(asort2(SORT_NUMERIC, $fruits) === $expected);
        $this->assertFalse($fruits === $expected);

        $asort = asort2(SORT_NUMERIC);
        $this->assertTrue($asort($fruits) === $expected);
        $this->assertFalse($fruits === $expected);
    }

    public function testSort()
    {
        $arr = [3, 2, 4, 1];
        $expected = [1, 2, 3, 4];
        $this->assertTrue(sort($arr) === $expected);
        $this->assertFalse($arr === $expected);

        $sort = sort();
        $this->assertTrue($sort($arr) === $expected);
        $this->assertFalse($arr === $expected);
    }

    public function testSort2()
    {
        $arr = ['3', '2', '4', '1'];
        $expected = ['1', '2', '3', '4'];
        $this->assertTrue(sort2(SORT_NUMERIC, $arr) === $expected);
        $this->assertFalse($arr === $expected);

        $sort = sort2(SORT_NUMERIC);
        $this->assertTrue($sort($arr) === $expected);
        $this->assertFalse($arr === $expected);
    }

    public function testUASort()
    {
        $arr = [
            'a' => 4,
            'b' => 8,
            'c' => -1,
            'd' => -9,
            'e' => 2,
            'f' => 5,
            'g' => 3,
            'h' => -4
        ];
        $expected = [
            'd' => -9,
            'h' => -4,
            'c' => -1,
            'e' => 2,
            'g' => 3,
            'a' => 4,
            'f' => 5,
            'b' => 8
        ];
        $f = function ($a, $b) {
            if ($a == $b) {
                return 0;
            }
            return ($a < $b) ? -1 : 1;
        };
        $this->assertTrue(uasort($f, $arr) === $expected);
        $this->assertFalse($arr === $expected);

        $sortOffF = uasort($f);
        $this->assertTrue($sortOffF($arr) === $expected);
        $this->assertFalse($arr === $expected);
    }

    public function testUKSort()
    {
        $cmp = function ($a, $b) {
            $a = preg_replace('@^(a|an|the) @', '', $a);
            $b = preg_replace('@^(a|an|the) @', '', $b);
            return strcasecmp($a, $b);
        };

        $a = ["John" => 1, "the Earth" => 2, "an apple" => 3, "a banana" => 4];

        $expected = [
            'an apple' => 3,
            'a banana' => 4,
            'the Earth' => 2,
            'John' => 1
        ];
        $this->assertTrue(uksort($cmp, $a) === $expected);
        $this->assertFalse($a === $expected);

        $keySortCmp = uksort($cmp);
        $this->assertTrue($keySortCmp($a) === $expected);
        $this->assertFalse($a === $expected);
    }

    public function testUSort()
    {
        $cmp = function ($a, $b) {
            if ($a == $b) {
                return 0;
            }
            return ($a < $b) ? -1 : 1;
        };

        $a = [3, 2, 5, 6, 1];
        $expected = [1, 2, 3, 5, 6];

        $this->assertTrue(usort($cmp, $a) === $expected);
        $this->assertFalse($a === $expected);

        $usortCmp = usort($cmp);
        $this->assertTrue($usortCmp($a) === $expected);
        $this->assertFalse($a === $expected);
    }

    public function testArrayPush()
    {
        $arr = [1, 2];
        $expected = [1, 2, 3];
        $this->assertEquals(array_push(3, $arr), $expected);
        $this->assertEquals($arr, [1, 2]);

        $push3 = array_push(3);
        $this->assertEquals($push3($arr), $expected);
        $this->assertEquals($arr, [1, 2]);
    }

    public function testArrayPop()
    {
        $arr = [1, 2];
        $expected = 2;
        $this->assertEquals(array_pop($arr), $expected);
        $this->assertEquals($arr, [1, 2]);
    }

    public function testArrayShift()
    {
        $arr = [1, 2];
        $expected = 1;
        $this->assertEquals(array_shift($arr), $expected);
        $this->assertEquals($arr, [1, 2]);
    }

    public function testArrayUnshift()
    {
        $arr = [1, 2];
        $expected = [3, 1, 2];
        $this->assertEquals(array_unshift(3, $arr), $expected);
        $this->assertEquals($arr, [1, 2]);

        $prepend3 = array_unshift(3);
        $this->assertEquals($prepend3($arr), $expected);
        $this->assertEquals($arr, [1, 2]);
    }

    public function testArraySplice()
    {
        $arr = ['red', 'green', 'blue', 'yellow'];
        $this->assertEquals(array_splice(2, $arr), ['red', 'green']);

        $splice2 = array_splice(2);
        $this->assertEquals($splice2($arr), ['red', 'green']);
    }

    public function testArraySplice3()
    {
        $arr = ['red', 'green', 'blue', 'yellow'];
        $this->assertEquals(array_splice3(1, -1, $arr), ['red', 'yellow']);

        $splice = array_splice3(1, -1);
        $this->assertEquals($splice($arr), ['red', 'yellow']);
    }

    public function testArraySplice4()
    {
        $arr = ['red', 'green', 'blue', 'yellow'];
        $this->assertEquals(array_splice4(1, -1, ['black', 'maroon'], $arr), ['red', 'black', 'maroon', 'yellow']);

        $splice = array_splice4(1, -1);
        $spliceWithReplacements = $splice(['black', 'maroon']);
        $this->assertEquals($spliceWithReplacements($arr), ['red', 'black', 'maroon', 'yellow']);
    }

    public function testCheckDate()
    {
        $this->assertEquals(checkdate(12, 21, 2000), \checkdate(12, 21, 2000));
        $checkdate = checkdate();
        $checkDayInDecember = $checkdate(12);
        $check21stOfDecember = $checkDayInDecember(21);
        $this->assertEquals($check21stOfDecember(2000), \checkdate(12, 21, 2000));
    }

    public function testDateCreate1()
    {
        $this->assertEquals(date_create1('2000-01-01'), \date_create('2000-01-01'));

        $dateCreate = date_create1();
        $this->assertEquals($dateCreate('2000-01-01'), \date_create('2000-01-01'));
    }

    public function testDateCreate2()
    {
        $this->assertEquals(
            date_create2(new DateTimeZone('Pacific/Nauru'), '2017-01-01'),
            \date_create('2017-01-01', new DateTimeZone('Pacific/Nauru'))
        );

        $createPacificNauruDate = date_create2(new DateTimeZone('Pacific/Nauru'));
        $this->assertEquals(
            $createPacificNauruDate('2017-01-01'),
            \date_create('2017-01-01', new DateTimeZone('Pacific/Nauru'))
        );
    }

    public function testDateAdd()
    {
        $interval = new DateInterval('P10D');
        $date = \date_create('2000-01-01');
        $this->assertEquals(
            date_add($interval, $date),
            \date_add($date, $interval)
        );

        $addP10D = date_add($interval);
        $this->assertEquals(
            $addP10D($date),
            \date_add($date, $interval)
        );
    }

    public function testDateCreateFromFormat()
    {
        $this->assertEquals(
            date_create_from_format('j-M-Y', '15-Feb-2009'),
            \date_create_from_format('j-M-Y', '15-Feb-2009')
        );

        $createFromjMY = date_create_from_format('j-M-Y');
        $this->assertEquals(
            $createFromjMY('15-Feb-2009'),
            \date_create_from_format('j-M-Y', '15-Feb-2009')
        );
    }

    public function testDateCreateFromFormat3()
    {
        $timezone = new DateTimeZone('Pacific/Nauru');
        $format = 'j-M-Y';
        $time = '15-Feb-2009';
        $this->assertEquals(
            date_create_from_format3($timezone, $format, $time),
            \date_create_from_format($format, $time, $timezone)
        );

        $nauruDateFromFormat = date_create_from_format3($timezone);
        $jmyNauru = $nauruDateFromFormat($format);
        $this->assertEquals(
            $jmyNauru($time),
            \date_create_from_format($format, $time, $timezone)
        );
    }

    public function testDateCreateImmutableFromFormat()
    {
        $format = 'j-M-Y';
        $time = '15-Feb-2009';
        $this->assertEquals(
            date_create_immutable_from_format($format, $time),
            \date_create_immutable_from_format($format, $time)
        );

        $jmyDate = date_create_immutable_from_format($format);
        $this->assertEquals(
            $jmyDate($time),
            \date_create_immutable_from_format($format, $time)
        );
    }

    public function testDateCreateImmutableFromFormat3()
    {
        $timezone = new DateTimeZone('Pacific/Nauru');
        $format = 'j-M-Y';
        $time = '15-Feb-2009';
        $this->assertEquals(
            date_create_immutable_from_format3($timezone, $format, $time),
            \date_create_immutable_from_format($format, $time, $timezone)
        );

        $nauruDateFromFormat = date_create_immutable_from_format3($timezone);
        $jmyNauru = $nauruDateFromFormat($format);
        $this->assertEquals(
            $jmyNauru($time),
            \date_create_immutable_from_format($format, $time, $timezone)
        );
    }

    public function testDateCreateImmutable1()
    {
        $this->assertEquals(date_create_immutable1('2000-01-01'), \date_create_immutable('2000-01-01'));

        $dateCreate = date_create_immutable1();
        $this->assertEquals($dateCreate('2000-01-01'), \date_create_immutable('2000-01-01'));
    }

    public function testDateCreateImmutable2()
    {
        $this->assertEquals(
            date_create_immutable2(new DateTimeZone('Pacific/Nauru'), '2017-01-01'),
            \date_create_immutable('2017-01-01', new DateTimeZone('Pacific/Nauru'))
        );

        $createPacificNauruDate = date_create_immutable2(new DateTimeZone('Pacific/Nauru'));
        $this->assertEquals(
            $createPacificNauruDate('2017-01-01'),
            \date_create_immutable('2017-01-01', new DateTimeZone('Pacific/Nauru'))
        );
    }

    public function testDateDateSet()
    {
        $date = date_create();
        $this->assertEquals(
            date_date_set(2001, 2, 3, $date),
            \date_date_set($date, 2001, 2, 3)
        );

        $date2 = date_create();
        $setToFeb32001 = date_date_set(2001, 2, 3);
        $this->assertEquals(
            $setToFeb32001($date2),
            \date_date_set($date2, 2001, 2, 3)
        );
    }

    public function testDateDefaultTimezoneSet()
    {
        $this->assertEquals(
            date_default_timezone_set('America/Denver'),
            \date_default_timezone_set('America/Denver')
        );

        $setTimezone = date_default_timezone_set();
        $this->assertEquals(
            $setTimezone('America/Denver'),
            \date_default_timezone_set('America/Denver')
        );
    }

    public function testDateDiff()
    {
        $a = new DateTime('2009-10-11');
        $b = new DateTime('2009-10-13');
        $this->assertEquals(date_diff($a, $b), \date_diff($a, $b));

        $diffA = date_diff($a);
        $this->assertEquals($diffA($b), \date_diff($a, $b));
    }

    public function testDateDiff3()
    {
        $a = new DateTime('2009-10-13');
        $b = new DateTime('2009-10-11');
        $this->assertEquals(
            date_diff3(true, $a, $b),
            \date_diff($a, $b, true)
        );

        $diffAbsolute = date_diff3(true);
        $this->assertEquals(
            $diffAbsolute($a, $b),
            \date_diff($a, $b, true)
        );
    }

    public function testDateFormat()
    {
        $a = date_create1('2000-01-01');
        $this->assertEquals(
            date_format('Y-m-d H:i:s', $a),
            \date_format($a, 'Y-m-d H:i:s')
        );

        $formatYmdHis = date_format('Y-m-d H:i:s');
    }

    public function testDateIntervalCreateFromDateString()
    {
        $this->assertEquals(
            date_interval_create_from_date_string('1 day'),
            \date_interval_create_from_date_string('1 day')
        );

        $intervalFromDateStr = date_interval_create_from_date_string();
        $this->assertEquals(
            $intervalFromDateStr('1 day'),
            \date_interval_create_from_date_string('1 day')
        );
    }

    public function testDateIntervalFormat()
    {
        $a = new DateTime('2010-01-01');
        $b = new DateTime('2010-02-01');
        $interval = date_diff($a, $b);
        $this->assertEquals(
            date_interval_format('%a total days', $interval),
            \date_interval_format($interval, '%a total days')
        );

        $formatTotalDays = date_interval_format('%a total days');
        $this->assertEquals(
            $formatTotalDays($interval),
            \date_interval_format($interval, '%a total days')
        );
    }

    public function testDateIsodateSet()
    {
        $a = new DateTime('2010-01-01');
        $this->assertEquals(
            date_isodate_set(2012, 1, $a),
            \date_isodate_set($a, 2012, 1)
        );

        $setToJan12012 = date_isodate_set(2012, 1);
        $this->assertEquals(
            $setToJan12012($a),
            \date_isodate_set($a, 2012, 1)
        );
    }

    public function testDateIsodateSet4()
    {
        $a = new DateTime('2010-01-01');
        $this->assertEquals(
            date_isodate_set4(2012, 1, 1, $a),
            \date_isodate_set($a, 2012, 1, 1)
        );

        $setToJan12012 = date_isodate_set4(2012, 1, 1);
        $this->assertEquals(
            $setToJan12012($a),
            \date_isodate_set($a, 2012, 1, 1)
        );
    }

    public function testDateModify()
    {
        $a = date_create1('2006-12-12');
        $this->assertEquals(
            date_modify('+1 day', $a),
            \date_modify($a, '+1 day')
        );

        $addADay = date_modify('+1 day');
        $this->assertEquals(
            $addADay($a),
            \date_modify($a, '+1 day')
        );
    }

    public function testDateOffsetGet()
    {
        $a = date_create2(new DateTimeZone('America/New_York'), '2010-12-21');
        $this->assertEquals(
            date_offset_get($a),
            \date_offset_get($a)
        );

        $getOffset = date_offset_get();
        $this->assertEquals(
            $getOffset($a),
            \date_offset_get($a)
        );
    }

    public function testDateParseFromFormat()
    {
        $date = '6.1.2009 13:00+01:00';
        $this->assertEquals(
            date_parse_from_format('j.n.Y H:iP', $date),
            \date_parse_from_format('j.n.Y H:iP', $date)
        );

        $parsejnYHiP = date_parse_from_format('j.n.Y H:iP');
        $this->assertEquals(
            $parsejnYHiP($date),
            \date_parse_from_format('j.n.Y H:iP', $date)
        );
    }

    public function testDateParse()
    {
        $str = "2006-12-12 10:00:00.5";
        $this->assertEquals(
            date_parse($str),
            \date_parse($str)
        );

        $dateParse = date_parse();
        $this->assertEquals(
            $dateParse($str),
            \date_parse($str)
        );
    }

    public function testDateSub()
    {
        $date = date_create1('2000-01-20');
        $interval = date_interval_create_from_date_string('10 days');
        $this->assertEquals(
            date_sub($interval, $date),
            \date_sub($date, $interval)
        );

        $subtract10Days = date_sub($interval);

        $this->assertEquals(
            $subtract10Days($date),
            \date_sub($date, $interval)
        );
    }

    public function testDateSunInfo()
    {
        $lat = 31.7667;
        $long = 35.2333;
        $time  = strtotime('2006-12-12');

        $this->assertEquals(
            date_sun_info($lat, $long, $time),
            \date_sun_info($time, $lat, $long)
        );

        $sunForFixedLatAndLong = date_sun_info($lat, $long);
        $this->assertEquals(
            $sunForFixedLatAndLong($time),
            \date_sun_info($time, $lat, $long)
        );
    }

    public function testDateSunrise()
    {
        $t = time();
        $this->assertEquals(
            date_sunrise($t),
            \date_sunrise($t)
        );

        $sunrise = date_sunrise();
        $this->assertEquals(
            $sunrise($t),
            \date_sunrise($t)
        );
    }

    public function testDateSunrise2()
    {
        $t = time();
        $this->assertEquals(
            date_sunrise2(SUNFUNCS_RET_STRING, $t),
            \date_sunrise($t, SUNFUNCS_RET_STRING)
        );

        $stringSunrise = date_sunrise2(SUNFUNCS_RET_STRING);
        $this->assertEquals(
            $stringSunrise($t),
            \date_sunrise($t, SUNFUNCS_RET_STRING)
        );
    }

    public function testDateSunset()
    {
        $t = time();
        $this->assertEquals(
            date_sunset($t),
            \date_sunset($t)
        );

        $sunset = date_sunset();
        $this->assertEquals(
            $sunset($t),
            \date_sunset($t)
        );
    }

    public function testDateSunset2()
    {
        $t = time();
        $this->assertEquals(
            date_sunset2(SUNFUNCS_RET_STRING, $t),
            \date_sunset($t, SUNFUNCS_RET_STRING)
        );

        $sunsetStr = date_sunset2(SUNFUNCS_RET_STRING);
        $this->assertEquals(
            $sunsetStr($t),
            \date_sunset($t, SUNFUNCS_RET_STRING)
        );
    }

    public function testDateTimeSet()
    {
        $date = date_create1('2001-01-01');
        $this->assertEquals(
            date_time_set(14, 55, $date),
            \date_time_set($date, 14, 55)
        );

        $setTo255 = date_time_set(14, 55);
        $this->assertEquals(
            $setTo255($date),
            \date_time_set($date, 14, 55)
        );
    }

    public function testDateTimeSet4()
    {
        $date = date_create1('2001-01-01');
        $this->assertEquals(
            date_time_set4(14, 55, 12, $date),
            \date_time_set($date, 14, 55, 12)
        );

        $setTo25512 = date_time_set4(14, 55, 12);
        $this->assertEquals(
            $setTo25512($date),
            \date_time_set($date, 14, 55, 12)
        );
    }

    public function testDateTimestampGet()
    {
        $date = date_create();
        $this->assertEquals(
            date_timestamp_get($date),
            \date_timestamp_get($date)
        );

        $getTimestamp = date_timestamp_get();
        $this->assertEquals(
            $getTimestamp($date),
            \date_timestamp_get($date)
        );
    }

    public function testDateTimestampSet()
    {
        $date = date_create();
        $this->assertEquals(
            date_timestamp_set(1171502725, $date),
            \date_timestamp_set($date, 1171502725)
        );

        $f = date_timestamp_set(1171502725);
        $this->assertEquals(
            $f($date),
            \date_timestamp_set($date, 1171502725)
        );
    }

    public function testDateTimezoneGet()
    {
        $a = date_create2(new DateTimeZone('Europe/London'), "now");
        $this->assertEquals(
            date_timezone_get($a),
            \date_timezone_get($a)
        );

        $getTimezone = date_timezone_get();
        $this->assertEquals(
            $getTimezone($a),
            \date_timezone_get($a)
        );
    }

    public function testDateTimezoneSet()
    {
        $a = new DateTimeZone('Pacific/Chatham');
        $b = new DateTimeZone('Pacific/Nauru');
        $date = date_create2($a, '2000-01-01');
        $this->assertEquals(
            date_timezone_set($b, $date),
            \date_timezone_set($date, $b)
        );
    }

    public function testDate()
    {
        $this->assertEquals(
            date('l'),
            \date('l')
        );

        $date = date();
        $this->assertEquals(
            $date('l'),
            \date('l')
        );
    }

    public function testDate2()
    {
        $time = time();
        $this->assertEquals(
            date2('l', $time),
            \date('l', $time)
        );

        $date = date2('l');
        $this->assertEquals(
            $date($time),
            \date('l', $time)
        );
    }

    public function testGetDate1()
    {
        $time = time();
        $this->assertEquals(
            getdate1($time),
            \getdate($time)
        );

        $getDate = getdate1();
        $this->assertEquals(
            $getDate($time),
            \getdate($time)
        );
    }

    public function testGetTimeOfDay1()
    {
        $this->assertEquals(
            gettimeofday1(true),
            \gettimeofday(true),
            'Time of day did not match!',
            1
        );

        $getTimeOfDay = gettimeofday1();
        $this->assertEquals(
            $getTimeOfDay(true),
            \gettimeofday(true),
            'Time of day did not match!',
            1
        );
    }

    public function testGmDate()
    {
        $format = 'Y-m-d';
        $this->assertEquals(
            gmdate($format),
            \gmdate($format)
        );

        $gmdate = gmdate();
        $this->assertEquals(
            $gmdate($format),
            \gmdate($format)
        );
    }

    public function testGmDate2()
    {
        $time = time();
        $this->assertEquals(
            gmdate2('l', $time),
            \gmdate('l', $time)
        );

        $gmdate = gmdate2('l');
        $this->assertEquals(
            $gmdate($time),
            \gmdate('l', $time)
        );
    }

    public function testGmStrfTime()
    {
        $format = '%b %d %Y';
        $this->assertEquals(
            gmstrftime($format),
            \gmstrftime($format)
        );

        $gmstrftime = gmstrftime();
        $this->assertEquals(
            $gmstrftime($format),
            \gmstrftime($format)
        );
    }

    public function testGmStrfTime2()
    {
        $time = time();
        $this->assertEquals(
            gmstrftime2('%b', $time),
            \gmstrftime('%b', $time)
        );

        $gmstrftime = gmstrftime2('%b');
        $this->assertEquals(
            $gmstrftime($time),
            \gmstrftime('%b', $time)
        );
    }

    public function testIDate()
    {
        $format = 'U';
        $this->assertEquals(
            idate($format),
            \idate($format)
        );

        $idate = idate();
        $this->assertEquals(
            $idate($format),
            \idate($format)
        );
    }

    public function testIDate2()
    {
        $time = time();
        $this->assertEquals(
            idate2('U', $time),
            \idate('U', $time)
        );

        $idate = idate2('U');
        $this->assertEquals(
            $idate($time),
            \idate('U', $time)
        );
    }

    public function testLocaltime1()
    {
        $time = time();
        $this->assertEquals(
            localtime1($time),
            \localtime($time)
        );

        $localtime = localtime1();
        $this->assertEquals(
            $localtime($time),
            \localtime($time)
        );
    }

    public function testLocaltime2()
    {
        $time = time();
        $this->assertEquals(
            localtime2(true, $time),
            \localtime($time, true)
        );

        $localtime = localtime2(true);
        $this->assertEquals(
            $localtime($time),
            \localtime($time, true)
        );
    }

    public function testMicrotime1()
    {
        $this->assertEquals(
            microtime1(true),
            \microtime(true),
            'Micro time not equal!',
            1
        );

        $microtime = microtime1();
        $this->assertEquals(
            $microtime(true),
            \microtime(true),
            'Micro time not equal!',
            1
        );
    }

    public function testStrftime()
    {
        $format = '%b %d %Y';
        $this->assertEquals(
            strftime($format),
            \strftime($format)
        );

        $strftime = strftime();
        $this->assertEquals(
            $strftime($format),
            \strftime($format)
        );
    }

    public function testStrftime2()
    {
        $time = time();
        $this->assertEquals(
            strftime2('l', $time),
            \strftime('l', $time)
        );

        $strftime = strftime2('l');
        $this->assertEquals(
            $strftime($time),
            \strftime('l', $time)
        );
    }

    public function testStrptime()
    {
        $format = '%d/%m/%Y %H:%M:%S';
        $strf = strftime($format);

        $this->assertEquals(
            strptime($format, $strf),
            \strptime($strf, $format)
        );

        $strptime = strptime($format);
        $this->assertEquals(
            $strptime($strf),
            \strptime($strf, $format)
        );
    }

    public function testStrtotime()
    {
        $time = "last Monday";
        $this->assertEquals(
            strtotime($time),
            \strtotime($time)
        );

        $strtotime = strtotime();
        $this->assertEquals(
            $strtotime($time),
            \strtotime($time)
        );
    }

    public function testStrtotime2()
    {
        $start = time();
        $timeStr = "-1 days";
        $this->assertEquals(
            strtotime2($start, $timeStr),
            \strtotime($timeStr, $start)
        );

        $strtotime = strtotime2($start);
        $this->assertEquals(
            $strtotime($timeStr),
            \strtotime($timeStr, $start)
        );
    }

    public function testTimezoneIdentifiersList1()
    {
        $this->assertEquals(
            timezone_identifiers_list1(\DateTimeZone::ALL),
            \timezone_identifiers_list()
        );

        $til = timezone_identifiers_list1();
        $this->assertEquals(
            $til(\DateTimeZone::ALL),
            \timezone_identifiers_list(\DateTimeZone::ALL)
        );
    }

    public function testTimezoneIdentifiersList2()
    {
        $this->assertEquals(
            timezone_identifiers_list2('AF', \DateTimeZone::PER_COUNTRY),
            \timezone_identifiers_list(\DateTimeZone::PER_COUNTRY, 'AF')
        );

        $tilAF = timezone_identifiers_list2('AF');
        $this->assertEquals(
            $tilAF(\DateTimeZone::PER_COUNTRY),
            \timezone_identifiers_list(\DateTimeZone::PER_COUNTRY, 'AF')
        );
    }

    public function testTimezoneLocationGet()
    {
        $tz = new DateTimeZone("Europe/Prague");
        $this->assertEquals(
            timezone_location_get($tz),
            \timezone_location_get($tz)
        );

        $locGet = timezone_location_get();
        $this->assertEquals(
            $locGet($tz),
            \timezone_location_get($tz)
        );
    }

    public function testTimezoneNameFromAbbr()
    {
        $abbr = "CET";
        $this->assertEquals(
            timezone_name_from_abbr($abbr),
            \timezone_name_from_abbr($abbr)
        );

        $nameFromAbbr = timezone_name_from_abbr();
        $this->assertEquals(
            $nameFromAbbr($abbr),
            \timezone_name_from_abbr($abbr)
        );
    }

    public function testTimezoneNameFromAbbr2()
    {
        $abbr = "";
        $this->assertEquals(
            timezone_name_from_abbr2(3600, $abbr),
            \timezone_name_from_abbr($abbr, 3600)
        );

        $nameFromAbbr = timezone_name_from_abbr2(3600);
        $this->assertEquals(
            $nameFromAbbr($abbr),
            \timezone_name_from_abbr($abbr, 3600)
        );
    }

    public function testTimezoneNameFromAbbr3()
    {
        $abbr = "";
        $this->assertEquals(
            timezone_name_from_abbr3(0, 3600, $abbr),
            \timezone_name_from_abbr($abbr, 3600, 0)
        );

        $nameFromAbbr = timezone_name_from_abbr3(0, 3600);
        $this->assertEquals(
            $nameFromAbbr($abbr),
            \timezone_name_from_abbr($abbr, 3600, 0)
        );
    }

    public function testTimezoneNameGet()
    {
        $tz = new DateTimeZone("Europe/Prague");
        $this->assertEquals(
            timezone_name_get($tz),
            \timezone_name_get($tz)
        );

        $nameGet = timezone_name_get();
        $this->assertEquals(
            $nameGet($tz),
            \timezone_name_get($tz)
        );
    }

    public function testTimezoneOffsetGet()
    {
        $tz = new DateTimeZone("Asia/Tokyo");
        $time = new DateTime("now", $tz);

        $this->assertEquals(
            timezone_offset_get($tz, $time),
            \timezone_offset_get($tz, $time)
        );

        $tzOffset = timezone_offset_get($tz);
        $this->assertEquals(
            $tzOffset($time),
            \timezone_offset_get($tz, $time)
        );
    }

    public function testTimezoneOpen()
    {
        $tz = 'Europe/London';
        $this->assertEquals(
            timezone_open($tz),
            \timezone_open($tz)
        );

        $tzOpen = timezone_open();
        $this->assertEquals(
            $tzOpen($tz),
            \timezone_open($tz)
        );
    }

    public function testTimezoneTransitionsGet()
    {
        $tz = new DateTimeZone('Europe/London');
        $this->assertEquals(
            timezone_transitions_get($tz),
            \timezone_transitions_get($tz)
        );

        $ttg = timezone_transitions_get();
        $this->assertEquals(
            $ttg($tz),
            \timezone_transitions_get($tz)
        );
    }

    public function testTimezoneTransitionsGet2()
    {
        $start = \strtotime('-2 weeks');
        $tz = new DateTimeZone('Europe/London');
        $this->assertEquals(
            timezone_transitions_get2($start, $tz),
            \timezone_transitions_get($tz, $start)
        );

        $ttg = timezone_transitions_get2($start);
        $this->assertEquals(
            $ttg($tz),
            \timezone_transitions_get($tz, $start)
        );
    }

    public function testTimezoneTransitionsGet3()
    {
        $start = \strtotime('-2 weeks');
        $end = \strtotime('-1 week');
        $tz = new DateTimeZone('Europe/London');
        $this->assertEquals(
            timezone_transitions_get3($start, $end, $tz),
            \timezone_transitions_get($tz, $start, $end)
        );

        $ttg = timezone_transitions_get3($start, $end);
        $this->assertEquals(
            $ttg($tz),
            \timezone_transitions_get($tz, $start, $end)
        );
    }

    public function testJsonEncode()
    {
        $arr = ['a' => 1, 'b' => 2, 'c' => 3];
        $this->assertEquals(json_encode($arr), \json_encode($arr));

        $jsonEncode = json_encode();
        $this->assertEquals($jsonEncode($arr), \json_encode($arr));
    }

    public function testJsonEncode2()
    {
        $arr = ['a' => '1', 'b' => '2', 'c' => '3'];
        $this->assertEquals(
            json_encode2(JSON_NUMERIC_CHECK, $arr),
            \json_encode($arr, JSON_NUMERIC_CHECK)
        );

        $jsonEncodeNumCheck = json_encode2(JSON_NUMERIC_CHECK);
        $this->assertEquals(
            $jsonEncodeNumCheck($arr),
            \json_encode($arr, JSON_NUMERIC_CHECK)
        );
    }

    public function testJsonDecode()
    {
        $json = '{"a":1,"b":2,"c":3}';
        $this->assertEquals(json_decode($json), \json_decode($json));

        $jsonDecode = json_decode();
        $this->assertEquals($jsonDecode($json), \json_decode($json));
    }

    public function testJsonDecode2()
    {
        $json = '{"a":1,"b":2,"c":3}';
        $this->assertEquals(json_decode2(true, $json), \json_decode($json, true));

        $jsonDecode = json_decode2(true);
        $this->assertEquals($jsonDecode($json), \json_decode($json, true));
    }

    public function testBasename()
    {
        $path = "/etc/passwd";
        $this->assertEquals(basename($path), 'passwd');
        $this->assertEquals(basename($path), \basename($path));

        $basename = basename();
        $this->assertEquals($basename($path), 'passwd');
        $this->assertEquals($basename($path), \basename($path));
    }

    public function testBasename2()
    {
        $path = "/etc/sudoers.d";
        $suffix = ".d";
        $this->assertEquals(basename2($suffix, $path), \basename($path, $suffix));

        $basenameSuffix = basename2($suffix);
        $this->assertEquals($basenameSuffix($path), \basename($path, $suffix));
    }

    public function testChgrpAndFilegroup()
    {
        $file = dirname(__FILE__) . '/fixtures/config.json';
        $this->assertTrue(chgrp(filegroup($file), $file));

        $filegroup = filegroup();
        $chFilegroup = chgrp($filegroup($file));
        $this->assertTrue($chFilegroup($file));
    }
}
