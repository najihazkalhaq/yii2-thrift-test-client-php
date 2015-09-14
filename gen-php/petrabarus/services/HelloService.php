<?php
namespace petrabarus\services;
/**
 * Autogenerated by Thrift Compiler (0.9.2)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


interface HelloServiceIf {
  /**
   * @return string
   */
  public function say_hello();
  /**
   * @param int $language
   * @return string
   */
  public function say_foreign_hello($language);
  /**
   * @param int $times
   * @return string[]
   */
  public function say_hello_repeat($times);
}

class HelloServiceClient implements \petrabarus\services\HelloServiceIf {
  protected $input_ = null;
  protected $output_ = null;

  protected $seqid_ = 0;

  public function __construct($input, $output=null) {
    $this->input_ = $input;
    $this->output_ = $output ? $output : $input;
  }

  public function say_hello()
  {
    $this->send_say_hello();
    return $this->recv_say_hello();
  }

  public function send_say_hello()
  {
    $args = new \petrabarus\services\HelloService_say_hello_args();
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'say_hello', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('say_hello', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_say_hello()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\petrabarus\services\HelloService_say_hello_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \petrabarus\services\HelloService_say_hello_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("say_hello failed: unknown result");
  }

  public function say_foreign_hello($language)
  {
    $this->send_say_foreign_hello($language);
    return $this->recv_say_foreign_hello();
  }

  public function send_say_foreign_hello($language)
  {
    $args = new \petrabarus\services\HelloService_say_foreign_hello_args();
    $args->language = $language;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'say_foreign_hello', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('say_foreign_hello', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_say_foreign_hello()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\petrabarus\services\HelloService_say_foreign_hello_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \petrabarus\services\HelloService_say_foreign_hello_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("say_foreign_hello failed: unknown result");
  }

  public function say_hello_repeat($times)
  {
    $this->send_say_hello_repeat($times);
    return $this->recv_say_hello_repeat();
  }

  public function send_say_hello_repeat($times)
  {
    $args = new \petrabarus\services\HelloService_say_hello_repeat_args();
    $args->times = $times;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'say_hello_repeat', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('say_hello_repeat', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_say_hello_repeat()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\petrabarus\services\HelloService_say_hello_repeat_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \petrabarus\services\HelloService_say_hello_repeat_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("say_hello_repeat failed: unknown result");
  }

}

// HELPER FUNCTIONS AND STRUCTURES

class HelloService_say_hello_args extends TBase {
  static $_TSPEC;


  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        );
    }
  }

  public function getName() {
    return 'HelloService_say_hello_args';
  }

  public function read($input)
  {
    return $this->_read('HelloService_say_hello_args', self::$_TSPEC, $input);
  }

  public function write($output) {
    return $this->_write('HelloService_say_hello_args', self::$_TSPEC, $output);
  }

}

class HelloService_say_hello_result extends TBase {
  static $_TSPEC;

  /**
   * @var string
   */
  public $success = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'HelloService_say_hello_result';
  }

  public function read($input)
  {
    return $this->_read('HelloService_say_hello_result', self::$_TSPEC, $input);
  }

  public function write($output) {
    return $this->_write('HelloService_say_hello_result', self::$_TSPEC, $output);
  }

}

class HelloService_say_foreign_hello_args extends TBase {
  static $_TSPEC;

  /**
   * @var int
   */
  public $language = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'language',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'HelloService_say_foreign_hello_args';
  }

  public function read($input)
  {
    return $this->_read('HelloService_say_foreign_hello_args', self::$_TSPEC, $input);
  }

  public function write($output) {
    return $this->_write('HelloService_say_foreign_hello_args', self::$_TSPEC, $output);
  }

}

class HelloService_say_foreign_hello_result extends TBase {
  static $_TSPEC;

  /**
   * @var string
   */
  public $success = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'HelloService_say_foreign_hello_result';
  }

  public function read($input)
  {
    return $this->_read('HelloService_say_foreign_hello_result', self::$_TSPEC, $input);
  }

  public function write($output) {
    return $this->_write('HelloService_say_foreign_hello_result', self::$_TSPEC, $output);
  }

}

class HelloService_say_hello_repeat_args extends TBase {
  static $_TSPEC;

  /**
   * @var int
   */
  public $times = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'times',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'HelloService_say_hello_repeat_args';
  }

  public function read($input)
  {
    return $this->_read('HelloService_say_hello_repeat_args', self::$_TSPEC, $input);
  }

  public function write($output) {
    return $this->_write('HelloService_say_hello_repeat_args', self::$_TSPEC, $output);
  }

}

class HelloService_say_hello_repeat_result extends TBase {
  static $_TSPEC;

  /**
   * @var string[]
   */
  public $success = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'HelloService_say_hello_repeat_result';
  }

  public function read($input)
  {
    return $this->_read('HelloService_say_hello_repeat_result', self::$_TSPEC, $input);
  }

  public function write($output) {
    return $this->_write('HelloService_say_hello_repeat_result', self::$_TSPEC, $output);
  }

}

