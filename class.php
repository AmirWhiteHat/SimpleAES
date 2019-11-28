<?php
class Aes
{
  protected $iv;
  protected $key;
  public function __construct()
  {
    $this->key = base64_encode( '1234567890qwertyuiopasdf' );
    $this->iv  = base64_encode( 'qwertyuiopasdfgh' );
  }
  public function setKey( $key )
  {
    $this->key = $key;
  }
  public function setIv( $iv )
  {
    $this->iv = $iv;
  }
  public function encrypt( $str )
  {
    $encrypted = openssl_encrypt( $str, 'aes-256-cbc', base64_decode( $this->key ), OPENSSL_RAW_DATA, base64_decode( $this->iv ) );
    return base64_encode( $encrypted );
  }
  public function decrypt( $str )
  {
    $baseDecode = base64_decode( $str );
    return openssl_decrypt( $baseDecode, 'aes-256-cbc', base64_decode( $this->key ), OPENSSL_RAW_DATA, base64_decode( $this->iv ) );
  }
}
