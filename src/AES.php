<?php

namespace Hsunmr;

class AES
{
    /**
     * encrypt
     *
     * @param  string $original_string
     * @param  string $cipher_algo
     * @param  string $key
     * @param  string $iv
     * @return string
     */
    public static function encrypt(string $original_string, string $cipher_algo, string $key, string $iv): string
    {
        return openssl_encrypt($original_string, $cipher_algo, $key, 0, $iv);
    }

    /**
     * decrypt
     *
     * @param  string $encrypted_string
     * @param  string $cipher_algo
     * @param  string $key
     * @param  string $iv
     * @return string
     */
    public static function decrypt(string $encrypted_string, string $cipher_algo, string $key, string $iv): string
    {
        return openssl_decrypt($encrypted_string, $cipher_algo, $key, 0, $iv);
    }
}