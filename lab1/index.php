<?php


// دوال المصفوفات


function arrayPushExample() {  /*تضيف عنصر أو أكثر إلى نهاية المصفوفة. */ 
 
    $array = [1, 2, 3];
    array_push($array, 4);
    echo "arrayPush: " . implode(", ", $array) . "<br>"; // الناتج: 1, 2, 3, 4
}


 
 
function arrayPopExample() { /* تزيل آخر عنصر من المصفوفة وتعيده.*/
    $array = [1, 2, 3];
    $last = array_pop($array);
    echo "arrayPop: Last: $last, Array: " . implode(", ", $array) . "<br>"; // الناتج: Last: 3, Array: 1, 2
}


function arrayShiftExample() { /* تزيل أول عنصر من المصفوفة وتعيده*/
    $array = [1, 2, 3];
    $first = array_shift($array);
    echo "arrayShift: First: $first, Array: " . implode(", ", $array) . "<br>"; // الناتج: First: 1, Array: 2, 3
}


function arrayUnshiftExample() { /*تضيف عنصر أو أكثر إلى بداية المصفوفة.*/
    $array = [2, 3];
    array_unshift($array, 1);
    echo "arrayUnshift: " . implode(", ", $array) . "<br>"; // الناتج: 1, 2, 3
}


function arrayMergeExample() {/* تدمج اثنتين أو أكثر من المصفوفات*/
    $array1 = [1, 2];
    $array2 = [3, 4];
    $merged = array_merge($array1, $array2);
    echo "arrayMerge: " . implode(", ", $merged) . "<br>"; // الناتج: 1, 2, 3, 4
}


function arraySliceExample() { /*تعيد جزءًا من المصفوفة*/
    $array = [1, 2, 3, 4, 5];
    $slice = array_slice($array, 1, 3);
    echo "arraySlice: " . implode(", ", $slice) . "<br>"; // الناتج: 2, 3, 4
}


function arrayKeysExample() { /*تعيد جميع المفاتيح لمصفوفة*/
    $array = ['a' => 1, 'b' => 2];
    $keys = array_keys($array);
    echo "arrayKeys: " . implode(", ", $keys) . "<br>"; // الناتج: a, b
}


function arrayValuesExample() { /* تعيد جميع القيم لمصفوفة*/
    $array = ['a' => 1, 'b' => 2];
    $values = array_values($array);
    echo "arrayValues: " . implode(", ", $values) . "<br>"; // الناتج: 1, 2
}


function inArrayExample() { /* تتحقق مما إذا كانت قيمة معينة موجودة في المصفوفة*/
    $array = [1, 2, 3];
    $exists = in_array(2, $array); // true
    echo "inArray: " . ($exists ? 'true' : 'false') . "<br>"; // الناتج: true
}


function arrayCountValuesExample() { /* تعيد عدد تكرارات كل قيمة في المصفوفة*/
    $array = [1, 2, 2, 3];
    $counts = array_count_values($array);
    echo "arrayCountValues: ";
    print_r($counts); // الناتج: Array ( [1] => 1 [2] => 2 [3] => 1 )
    echo "<br>";
}


function sortExample() { /* ترتب المصفوفة بترتيب تصاعدي*/
    $array = [3, 1, 2];
    sort($array);
    echo "sort: " . implode(", ", $array) . "<br>"; // الناتج: 1, 2, 3
}


function arrayReverseExample() { /* تعكس ترتيب العناصر في المصفوفة*/
    $array = [1, 2, 3];
    $reversed = array_reverse($array);
    echo "arrayReverse: " . implode(", ", $reversed) . "<br>"; // الناتج: 3, 2, 1
}


function arrayUniqueExample() { /*تزيل القيم المكررة من المصفوفة*/
    $array = [1, 2, 2, 3];
    $unique = array_unique($array);
    echo "arrayUnique: " . implode(", ", $unique) . "<br>"; // الناتج: 1, 2, 3
}


function arrayFilterExample() { /* تصفية المصفوفة باستخدام دالة معينة*/
    $array = [1, 2, 3, 4]; 
    $filtered = array_filter($array, function($value) {
        return $value > 2;
    });
    echo "arrayFilter: " . implode(", ", $filtered) . "<br>"; // الناتج: 3, 4
}


function arrayMapExample() { /* تطبق دالة معينة على كل عنصر في المصفوفة*/
    $array = [1, 2, 3];
    $squared = array_map(function($value) {
        return $value * $value;
    }, $array);
    echo "arrayMap: " . implode(", ", $squared) . "<br>"; // الناتج: 1, 4, 9
}

// تشغيل أمثلة المصفوفات
function runArrayExamples() {
    arrayPushExample();
    arrayPopExample();
    arrayShiftExample();
    arrayUnshiftExample();
    arrayMergeExample();
    arraySliceExample();
    arrayKeysExample();
    arrayValuesExample();
    inArrayExample();
    arrayCountValuesExample();
    sortExample();
    arrayReverseExample();
    arrayUniqueExample();
    arrayFilterExample();
    arrayMapExample();
}

// دوال النصوص

/* تعيد طول النص*/
function stringLengthExample() {
    $str = "Hello";
    echo "stringLength: " . strlen($str) . "<br>"; // 5
}

/* تحول النص إلى حروف كبيرة*/
function stringUpperCaseExample() {
    $str = "hello";
    $upper = strtoupper($str);
    echo "stringUpperCase: $upper<br>"; // "HELLO"
}

/* تحول النص إلى حروف صغيرة*/
function stringLowerCaseExample() {
    $str = "HELLO";
    $lower = strtolower($str);
    echo "stringLowerCase: $lower<br>"; // "hello"
}

/* تعيد جزءًا من النص*/
function stringSubstringExample() {
    $str = "Hello, World!";
    $substring = substr($str, 7, 5);
    echo "stringSubstring: $substring<br>"; // "World"
}

/* تبحث عن موضع أول ظهور لاسم نص في نص آخر*/
function stringPositionExample() {
    $str = "Hello, World!";
    $position = strpos($str, "World");
    echo "stringPosition: $position<br>"; // 7
}

/* تحل محل نص معين بنص آخر*/
function stringReplaceExample() {
    $str = "Hello, World!";
    $newStr = str_replace("World", "PHP", $str);
    echo "stringReplace: $newStr<br>"; // "Hello, PHP!"
}

/* إزالة الفراغات من بداية ونهاية النص*/
function stringTrimExample() {
    $str = "  Hello, World!  ";
    $trimmed = trim($str);
    echo "stringTrim: \"$trimmed\"<br>"; // "Hello, World!"
}

/* تقسم نص إلى مصفوفة بناءً على فاصل معين*/
function stringExplodeExample() {
    $str = "Hello,World,PHP";
    $array = explode(",", $str);
    echo "stringExplode: ";
    print_r($array); // ["Hello", "World", "PHP"]
    echo "<br>";
}

/* تجمع مصفوفة نصوص إلى نص واحد باستخدام فاصل*/
function stringImplodeExample() {
    $array = ["Hello", "World", "PHP"];
    $str = implode(", ", $array);
    echo "stringImplode: $str<br>"; // "Hello, World, PHP"
}

/* تحول الحرف الأول من النص إلى حرف كبير*/
function stringUcfirstExample() {
    $str = "hello";
    $capitalized = ucfirst($str);
    echo "stringUcfirst: $capitalized<br>"; // "Hello"
}

/* تعكس ترتيب الحروف في النص*/
function stringReverseExample() {
    $str = "Hello";
    $reversed = strrev($str);
    echo "stringReverse: $reversed<br>"; // "olleH"
}

/* تكرر النص لعدد معين من المرات*/
function stringRepeatExample() {
    $str = "Hi ";
    $repeated = str_repeat($str, 3);
    echo "stringRepeat: $repeated<br>"; // "Hi Hi Hi "
}

/* تحول الأحرف الخاصة إلى كودات HTML*/
function stringHtmlspecialcharsExample() {
    $str = "Hello <World>";
    $encoded = htmlspecialchars($str);
    echo "stringHtmlspecialchars: $encoded<br>"; // "Hello &lt;World&gt;"
}

/* تحويل الأحرف الجديدة إلى علامات <br>*/
function stringNl2brExample() {
    $str = "Hello\nWorld";
    $converted = nl2br($str);
    echo "stringNl2br: $converted<br>"; // "Hello<br />World"
}

/* تحقق مما إذا كان النص يحتوي على قيمة معينة*/
function stringContainsExample() {
    $str = "Hello, World!";
    $contains = str_contains($str, "World");
    echo "stringContains: " . ($contains ? 'true' : 'false') . "<br>"; // true
}

// تشغيل أمثلة النصوص
function runStringExamples() {
    stringLengthExample();
    stringUpperCaseExample();
    stringLowerCaseExample();
    stringSubstringExample();
    stringPositionExample();
    stringReplaceExample();
    stringTrimExample();
    stringExplodeExample();
    stringImplodeExample();
    stringUcfirstExample();
    stringReverseExample();
    stringRepeatExample();
    stringHtmlspecialcharsExample();
    stringNl2brExample();
    stringContainsExample();
}

// استدعاء جميع أمثلة الدوال
runArrayExamples();
echo "<br>";
runStringExamples();

?>