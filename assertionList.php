<?php 
//MOST FLEXIBLE
public function testDoesMatchRegex()
{
  $testString = $this->_testable->getTestString();
  $this->assertRegExp('/[a-z]+/',$testString);
}

//TRUE OR FALSE
public function testTruePropertyIsTrue()
{
  $this->assertTrue($this->_testable->trueProperty,"trueProperty isn't true");
}

public function testTruePropertyIsFalse()
{
  $this->assertFalse($this->_testable->trueProperty, "trueProperty isn't false");
}

//MATEMAGIC
public function testValueEquals()
{
  $valueOne = 4;
  $valueTwo = 2;
  $this->assertEquals($this->_testable->addValues($valueOne,$valueTwo),6);
}

public function testValueGreaterThan()
{
  $valueOne = 4;
  $valueTwo = 2;
  $this->assertGreaterThan($valueTwo,$valueOne);
}

public function testLessThanOrEqual()
{
  $valueOne = 4;
  $valueTwo = 2;
  $this->assertLessThanOrEqual($valueTwo,$valueOne);
}

public function testAreObjectsEqual()
{
  $testTwo = new Testable();
  $this->_testable->resetMe = false;
  $this->assertEquals($this->_testable,$testTwo);
}


//STRINGS
public function testStringEnding()
{
  $testString = $this->_testable->getTestString();
  $this->assertStringEndsWith('frood',$testString);
}

public function testStringStarts()
{
  $testString = $this->_testable->getTestString();
  $this->assertStringStartsWith('hoopy',$testString);
}

public function testEqualFileContents()
{
  $this->assertStringEqualsFile('/path/to/textfile.txt','foo');
}

public function testDoesStringMatchFormat()
{
  $testString = $this->_testable->getTestString();
  $this->assertStringMatchesFormat('%s',$testString);
}

public function testDoesStringFileFormat()
{
  $testString = $this->_testable->getTestString();
  $this->assertStringMatchesFormatFile('/path/to/textfie.txt','foo');
}

public function testStringIsNotNull()
{
  $notANull = "i'm not a null!";
  $this->assertNull($notANull);
}

public function testStringIsSame()
{
  $numberAsString = '1234';
  $this->assertSame(1234,$numberAsString);
}


//MIXED
public function testArrayKeyExists()
{
	$this->assertArrayHasKey('first key',$this->_testable->testArray);
}

public function testAttributeExists()
{
	$this->assertClassHasAttribute('resetMe',get_class($this->_testable));
}

public function testFileIsReal()
{
	$this->assertFileExists('/path/to/file.txt');
}

public function testIsInstance()
{
	$this->assertInstanceOf('OtherClass',$this->_testable);
}

?>