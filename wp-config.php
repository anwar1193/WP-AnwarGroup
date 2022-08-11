<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define( 'DB_NAME', 'wp_anwargroup' );

/** Nama pengguna basis data MySQL */
define( 'DB_USER', 'root' );

/** Kata sandi basis data MySQL */
define( 'DB_PASSWORD', '' );

/** Nama host MySQL */
define( 'DB_HOST', 'localhost' );

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l1ZQ}&tO~YL()G#%%5_><Kt<r)dOnF341!M=:uq &edCS|2~xIJzBjvhR8iB_4e+' );
define( 'SECURE_AUTH_KEY',  '5~^*n[~I=8|l.Gy4Ydb2o9>=MPn<B#*jZIA}MQyden$_v!*9HO@RCi%>4}[[R>5[' );
define( 'LOGGED_IN_KEY',    'LbA3%l:(YX*7`3p:VzzPj.Eg|vhxS6hF%o(,X1z%d+GkZ2vVNs Jk_3o5jFq-t4/' );
define( 'NONCE_KEY',        'eK}{rk`R.San%Fh^jOrsqUa.H[x{tl ~^NJ<f}XDo[PXH{7ep)//28I/7dn]z++T' );
define( 'AUTH_SALT',        '8t1R<=3H(vQfQfPk2tat[~O^KYmYZbWRwkm.7uGNqW@2:0WRsLIE7c=ApV[r8qk;' );
define( 'SECURE_AUTH_SALT', 'i9)a6e(@ublqpN_S`cz.([(O{4U~ZvVZ?cHz6aaF8`D}+P9/jRx-Rq,||.@u@j}@' );
define( 'LOGGED_IN_SALT',   '*%|Lhvy|-1`8Pfp$0V*_U&Blcgn$Z5^f4XYjoWl5e-qK>q[s^8l0py_+|j5V57*7' );
define( 'NONCE_SALT',       '<:-gw11zvNGmxJ{Bq!B:Z#^<_]9pa$CnS0%1RL^^!i={9y-7^LO+p.vB..F5h1qo' );

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
