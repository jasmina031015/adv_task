<?php
use PHPUnit\Framework\TestCase;

class ReverseWordsTest extends TestCase {
public function testReverseWordsWithCaseAndPunctuation() {
$this->assertEquals('Tac,', reverseWordsWithCaseAndPunctuation('Cat,'));
$this->assertEquals('Ьшым!', reverseWordsWithCaseAndPunctuation('Мышь!'));
$this->assertEquals('esuOh', reverseWordsWithCaseAndPunctuation('houSe'));
$this->assertEquals('кимОД', reverseWordsWithCaseAndPunctuation('домИК'));
$this->assertEquals('tnAhPele', reverseWordsWithCaseAndPunctuation('elEpHant'));
$this->assertEquals('si \'dloc\' now', reverseWordsWithCaseAndPunctuation("is 'cold' now"));
$this->assertEquals('otэ «Так» "отсорп"', reverseWordsWithCaseAndPunctuation('это «Так» "просто"'));
$this->assertEquals('driht-trap', reverseWordsWithCaseAndPunctuation('third-part'));
$this->assertEquals('nac`t', reverseWordsWithCaseAndPunctuation('can`t'));
}
}
