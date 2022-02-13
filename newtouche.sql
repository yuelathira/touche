-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 10:47 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newtouche`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `caption`, `image`, `created_at`, `updated_at`) VALUES
(0, '<p>TOUCH&Eacute; adalah&nbsp;tempat kamu untuk mengembangkan diri,&nbsp;mulai dari potensi individu,&nbsp;diri dan pasangan, diri&nbsp;dan&nbsp;anak/keluarga,&nbsp;sampai mengembangkan&nbsp;potensi diri dalam dunia belajar&nbsp;atau pekerjaan.&nbsp;Tentu saja dengan pendekatan yang adaptif sesuai kebutuhan masa kini.</p>\r\n\r\n<p>TOUCH&Eacute; bertujuan membantu individu berproses dengan diri sendiri, mengembangkan&nbsp;potensi pribadi sehingga dapat menjadi pribadi yang semakin berdaya guna bagi diri sendiri maupun orang lain.</p>', '1635264984_Company Profile Touche.jpeg', '2021-08-26 08:52:47', '2021-10-26 09:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('PUBLISH','DRAFT') COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `image`, `content`, `author`, `status`, `create_by`, `update_by`, `delete_by`, `created_at`, `updated_at`) VALUES
(0, 'Cara Self Care Untuk Self Love Dalam 3 Bentuk', 'cara-self-care-untuk-self-love-dalam-3-bentuk', '1632984739_New Logo TOUCHE (transparant).PNG', '<p style=\"text-align:justify\">Mendengar <em>Self Love</em> sepertinya bukan kata yang asing ditelinga kita. Banyak kaum milenial dan zilenial yang menggaungkan kata-kata dan tindakan&nbsp; <em>Self Love</em> sebagai bagian dari kampanye kesehatan mental atau bentuk dari kepedulian mereka terhadap kesejahteraan mental. &ldquo;Kamu juga harus pikirin kebahagian mu dong&rdquo; &ldquo;Jangan ngurus orang mulu&rdquo; &ldquo;Perhatikan diri sendiri&rdquo; itu adalah sebagian ucapan-ucapan yang kadang dilontarkan oleh orang lain atau kita sendiri ke orang lain, untuk mengingatkan dan mengarahkan agar selalu <em>Self Love</em>.</p>\r\n\r\n<p style=\"text-align:justify\">Apa sih <em>Self Love</em> itu? <em>Self Love</em> bukanlah suatu tindakan atau perasaan yang semata-mata hanya menyenangkan diri pribadi kita, tapi <em>Self Love</em> lebih dari itu. <em>Self Love</em> adalah suatu bentuk penghargaan untuk diri sendiri atas apa yang telah kita lakukan, baik itu kesuksesan atau kegagalan, senang atau sedih, atau pendorong dan penyemangat. Penghargaan tersebut tumbuh dari tindakan yang mendukung pertumbuhan dan perkembangan fisik, psikologis, dan spiritual.</p>\r\n\r\n<p style=\"text-align:justify\">Kenapa <em>Self Love</em> itu penting? Setiap manusia pasti memiliki kelemahan dan kekurangan, dan dengan mencintai diri sendiri, kita dapat menerima kelemahan dan kekurangan kita, memiliki belas kasih untuk diri sendiri, dan lebih berpusat pada tujuan dan nilai-nilai kehidupan kita. Hal yang bisa kita lakukan untuk <em>Self Love</em> adalah dengan <em>Self Care</em>.</p>\r\n\r\n<p style=\"text-align:justify\">Ada 3 bentuk Self Care yang bisa kalian lakukan untuk Self Love, apa saja itu? Yuk kita simak 3 bentuk Self Care dibawah ini.</p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\">Jasmani</li>\r\n</ol>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\"><em>Self Care</em> yang bisa kalian lakukan secara jasmani yaitu seperti berjalan kaki mengelilingi perumahan atau tempat yang kalian sukai, bermain dengan hewan peliharaan, beristirahat yang cukup, makan makanan yang sehat, minum air putih secukupnya, melakukan perenggangan, atau mendapatkan pelukan dari orang terkasih.</p>\r\n\r\n<ol start=\"2\">\r\n	<li style=\"text-align:justify\">Mental</li>\r\n</ol>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\">Untuk kesejahteraan mental, kalian bisa melakukan <em>Self Care</em> seperti mendengarkan music di waktu luang, menyediakan waktu 10 menit untuk menyendiri, menghubungi teman-teman, bersantai menyaksikan sunset/sunrise, bermain game, menonton serial/drama favoritmu, membuat DIY kerajinan tangan, atau membaca buku.</p>\r\n\r\n<ol start=\"3\">\r\n	<li style=\"text-align:justify\">Emosional</li>\r\n</ol>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\">Selain secara jasmani dan mental, bisa juga loh kalian melakukan <em>Self Care</em> secara emosional, yaitu dengan cara melakukan yoga, meditasi, explore keindahan alam, meluangkan waktu untuk menenangkan diri, buat daftar hal-hal yang kamu syukuri, baca sebuah puisi atau kutipan inspirasional, atau tulis catatan cinta untuk dirimu sendiri.</p>\r\n\r\n<p style=\"text-align:justify\">Hal-hal diatas adalah menggambarkan bahwa <em>Self Care</em> bisa dilakukan dengan mudah dan tentunya memberikan dampak yang besar bagi diri kita dan masih banyak lagi cara <em>Self Care</em> yang bisa kita lakukan untuk <em>Self Love</em>, dan mungkin salah satu dari kalian mempunyai cara khas sendiri dalam <em>Self Care</em>.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<hr />\r\n<p>Referensi :</p>\r\n\r\n<p>Psy.D., D. K. (2012, Maret 27). <em>A Seven-Step Prescription for Self-Love</em>. Retrieved Juli 31, 2020, from Psychology Today: https://www.psychologytoday.com/us/blog/get-hardy/201203/seven-step-prescription-self-love</p>', 'M.Rizaludin Al Anshori', 'PUBLISH', 2, NULL, NULL, '2020-08-30 13:38:16', '2021-10-26 10:40:42'),
(1, 'Teori Konspirasi', 'teori-konspirasi', '1632983028_New Logo TOUCHE (transparant).PNG', '<p style=\"text-align:justify\">Teori konspirasi sudah sering kita dengar belakangan ini. Terlebih semenjak pandemi COVID-19 ini menyebar luas, muncul narasi-narasi yang kita dengar di sosial media yang menganggap bahwa pandemi yang sedang dirasakan sekarang adalah sebuah hoax atau hasil konspirasi dari para elit dunia untuk membuat suatu tatanan dunia baru. Sebenarnya apa itu teori konspirasi? Dan kenapa teori konspirasi memiliki banyak penggemar? Yuk mari kita simak.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Teori konspirasi adalah sebuah teori yang muncul untuk menjelaskan suatu peristiwa terjadi karena adanya suatu kelompok yang kuat dan tersembunyi yang memiliki motif politik dalam peristiwa tersebut (Goetzel, 1994). Tentunya teori konspirasi menggunakan prasangka dan kesalahan berlogika dalam argumen teori konspirasi (Byford, 2011). Kepercayaan yang berlebih akan teori pun menurut peneliti bisa membahayakan kondisi psikologis dari individu (Barron, dkk., 2014). Bahaya psikologis yang muncul karena mempercaya teori konspirasi berhubungan dengan gangguan paranoia dan ketakutan berlebihan (Douglass &amp; Sutton, 2011). Lalu, apa sih yang menyebabkan individu tertarik dengan teori konspirasi. Berikut adalah alasan kenapa teori konspirasi sangat disukai dan diminati menurut Barkun (2003);</p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Teori konspirasi memberikan jawaban akan suatu fenomena dengan penjelasan yang lebih sederhana.</li>\r\n</ol>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\">Fenomena atau peristiwa yang ada di kehidupan kita sering kali begitu kompleks dan tidak mudah dijelaskan dengan pemikiran sederhana. Hal itu didorong dengan naluri manusia yang memiliki keinginan untuk mendapatkan kejelasan atau jawaban dari apa yang terjadi. Teori konspirasi memanfaatkan naluri dan insting manusia untuk mencari kejelasan dan kepastian dengan penjelasan yang sederhana dan mudah dimengerti untuk merasionalkan fenomena atau situasi yang terjadi.</p>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\">Contoh :&nbsp;</p>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\">Teori konspirasi menjelaskan terbentuknya pyramid karena adanya konspirasi alien</p>\r\n\r\n<ol start=\"2\">\r\n	<li style=\"text-align: justify;\">Teori konspirasi membagi sesuatu menjadi dua kutub</li>\r\n</ol>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\">Salah satu hal yang membuat teori konspirasi lebih menarik berikutnya adalah bagaimana teori konspirasi membagi atau mengkotak-kotakkan dunia menjadi dua yaitu baik dan jahat. Penjelasan tersebut sangat mudah dipahami dan menarik bagi masyarakat luas karena dunia hanya dilihat berdasarkan dua warna yaitu hitam dan putih.</p>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\">Contoh :&nbsp;</p>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\">Teori konspirasi membagi kelompok menjadi &ldquo;kita&rdquo; yaitu kelompok yang percaya dengan teori dan &ldquo;mereka&rdquo; yang tidak mempercayai teori konspirasi atau kontra sebagai pihak yang jahat.</p>\r\n\r\n<p style=\"text-align:justify\">Teori konspirasi akan terus berkembang dan terus ada karena kebutuhan manusia akan jawaban dari tiap peristiwa yang ada dalam kehidupannya akan terus ada. Sehingga diperlukan pemahaman dan melatih untuk berpikir kritis agar bisa menghindarkan diri dari jeratan teori konspirasi</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<hr />\r\n<p style=\"text-align:justify\">Referensi :</p>\r\n\r\n<p style=\"text-align:justify\">Barkun, M. (2013).&nbsp;<em>A culture of conspiracy: Apocalyptic visions in contemporary America</em>&nbsp;(Vol. 15). Univ of California Press.</p>\r\n\r\n<p style=\"text-align:justify\">Barron, D., Morgan, K., Towell, T., Altemeyer, B., &amp; Swami, V. (2014). Associations between schizotypy and belief in conspiracist ideation.&nbsp;<em>Personality and Individual Differences</em>,&nbsp;<em>70</em>, 156-159.</p>\r\n\r\n<p style=\"text-align:justify\">Douglas, K. M., &amp; Sutton, R. M. (2011). Does it take one to know one? Endorsement of conspiracy theories is influenced by personal willingness to conspire.&nbsp;<em>British Journal of Social Psychology</em>,&nbsp;<em>50</em>(3), 544-552.</p>\r\n\r\n<p style=\"text-align:justify\">Byford, J. (2011).&nbsp;<em>Conspiracy theories: A critical introduction</em>. Springer.</p>\r\n\r\n<p style=\"text-align:justify\">Goertzel, T. (1994). Belief in conspiracy theories.&nbsp;<em>Political psychology</em>, 731-742..</p>', 'Wisnu Yogi Pradhana', 'PUBLISH', 2, NULL, NULL, '2020-09-07 11:00:29', '2021-10-26 10:34:04'),
(2, 'Personal Recovery to Develop Yourself', 'personal-recovery-to-develop-yourself', '1632982976_New Logo TOUCHE (transparant).PNG', '<p style=\"text-align:justify\">Preparation dan planning adalah langkah penting dalam mencapai sebuah tujuan. Seperti yang dikatakan pelukis Pablo Picasso, &quot;Tujuan kita tercapai dari kendaraan yang sudah terencana untuk mencapai tujuan kita, sehingga kita harus sangat percaya, dan kita harus penuh semangat untuk mencapai tujuan. Karena tidak ada rute lain menuju sukses.</p>\r\n\r\n<p style=\"text-align:justify\">Tidak mempunyai rencana untuk memulihkan diri sama halnya dengan melakukan perjalanan lintas alam yang panjang tanpa mobil, arah, atau gas yang dapat diandalkan. Kamu akan tersesat beberapa kali di sepanjang jalan atau kamu tidak akan berhasil ke tujuan yang sesuai dengan perencanaan.</p>\r\n\r\n<p style=\"text-align:justify\">Nah, ada 5 cara yang dapat membantu kamu mengembangkan rencana untuk memulihkan diri sehingga berhasil untuk mencapai tujuan kamu. Yuk disimak!</p>\r\n\r\n<p style=\"text-align:justify\">1. <em>Prioritize Your Goals</em><br />\r\nBuat daftar spesifik yang &nbsp;fokus sesuai dengan bidang kamu untuk dikerjakan, kemudian pastikan itu penting, realistis, dan dapat diukur. Hal ini penting bagi kesehatan kamu (mempertahankan kesadaran diri, mengelola masalah kesehatan mental dan jasmani)</p>\r\n\r\n<p style=\"text-align:justify\">2. <em>Write it All Down</em><br />\r\nRencanamu harus ditulis, kamu dapat menulisnya di buku atau mengetiknya di laptop atau handphone, agar sewaktu-waktu kamu dapat memeriksanya kembali.</p>\r\n\r\n<p style=\"text-align:justify\">3. <em>Start with Just One Goal</em><br />\r\nMulailah dengan tujuan kamu yang paling penting dan kembangkan sebuah rencana untuk itu dengan menggunakan 5 langkah ini. Kemudian ulangi proses untuk tujuan terpenting anda berikutnya, dan seterusnya.</p>\r\n\r\n<p style=\"text-align:justify\">4. <em>List Spesific Action Steps</em><br />\r\nBuat to do list spesifik yang akan menuntun kamu ke arah tujuanmu. Setiap langkah melewati ujian, untuk itu bersikap realistis, dan anggaplah hal itu penting bagi kamu.</p>\r\n\r\n<p style=\"text-align:justify\">5. <em>Add Time Frames</em><br />\r\nTanpa time frames tertentu pada setiap tindakan dalam rencanamu, hal itu dapat menghanyutkan dan menunda segalanya.<br />\r\nTambahkan deadline pada setiap langkah tindakanmu.</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\nHal-hal di atas dapat membantu kamu untuk mencapai tujuanmu. Jika kamu mengikuti setiap langkahnya, maka kamu akan berkembang dan memiliki recovery plan untuk mencapai tujuan dengan sangat baik.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<hr />\r\n<p style=\"text-align:justify\">Referensi :</p>\r\n\r\n<p style=\"text-align:justify\">https://www.psychologytoday.com/intl/blog/the-recovery-coach/201707/how-develop-successful-personal-recovery-plan</p>', 'Faldo Julians Lambiombir', 'PUBLISH', 2, NULL, NULL, '2021-01-02 01:49:49', '2021-10-26 10:40:23'),
(3, 'Simple Ways to Restore Positive Energy', 'simple-ways-to-restore-positive-energy', '1632977695_New Logo TOUCHE (transparant).PNG', '<p>Mengembangkan dan mempertahankan energi positif itu lebih dari sekedar mikirin hal-hal yang menyenangkan loh, TOUCHEERS. Ini adalah antisipasi yang baik (yaitu kebahagiaan, kesehatan dan keberhasilan) dan keyakinan bahwa segala sesuatu &mdash; situasi, hambatan, dan kesulitan &mdash; akan bekerja dengan baik pada akhirnya.</p>\r\n\r\n<p>Kamu pernah dengar pepatah ini gak?<br />\r\n<em><strong>&ldquo;Pikiran yang positif datang dari hati yang penuh iman.&rdquo;&nbsp;</strong></em>Nah untuk kamu yang pengen tetap positif saat lagi menghadapi tantangan dan situasi negatif, TOUCHE mau nge-share hal yang bisa kamu lakuin nih untuk menolong memulihkan energi positif kamu :</p>\r\n\r\n<p>1. <em><strong>Enjoy Nature</strong></em><br />\r\nMenurut riset nih, menikmati alam terbuka yang luas meningkatkan kesehatan manusia. Menghabiskan waktu di lingkungan alami yang tenang telah terbukti secara ilmiah untuk menurunkan tingkat stres, meningkatkan memori kerja dan membuat kamu terasa kembali seperti remaja.</p>\r\n\r\n<p><em><strong>2. Develop an Attitude of Gratitude</strong></em><br />\r\nPerhatiin dan hargain hal-hal positif dalam kehidupan kamu adalah cara yang hebat untuk mengangkat semangat kamu serta ngasih dorongan mental kepada diri sendiri. Cobalah mempraktikkan rasa syukur dengan menjadi bersyukur untuk hal-hal sederhana dalam kehidupan.</p>\r\n\r\n<p><em><strong>3. Take a Mental Break</strong></em><br />\r\nKelelahan adalah pembunuh hal positif loh. Kamu harus belajar untuk beristirahat saat keadaan mulai gak terkendali. Lakuin sesuatu yang membantu pikiranmu terbebas dari tantangan apa pun yang kamu hadapi. Misalnya tidur siang.</p>\r\n\r\n<p><em><strong>4. Laugh</strong></em><br />\r\nTertawa memang merupakan obat terbaik untuk sakit hati. Karena dengan tertawa, akan memperkuat sistem kekebalan tubuh, meningkatkan suasana hati, mengurangi rasa sakit, dan melindungi kamu dari dampak stres yang merusak. Carilah cara untuk sering tertawa, seperti nonton komedi, menghabiskan waktu dengan teman kamu.</p>\r\n\r\n<p><em><strong>5. Take a Walk</strong></em><br />\r\nMenurut para ilmuwan, salah satu cara terbaik untuk mengusir kesedihan adalah dengan pergi berjalan-jalan. Karena dengan jalan cepat, dapat membuat kamu merasa tenang dengan mengaktifkan sel-sel saraf di otak yang mengendurkan indra sehingga kamu bisa kembali mendapatkan energi positif.</p>\r\n\r\n<p><em><strong>6. Treat Yourself</strong></em><br />\r\nBeri diri kamu penghargaan dengan mengambil waktu untuk &nbsp;&quot;<em>me time</em>&quot; dan ngerayain diri kamu sebagai pribadi penting untuk mempertahankan sudut pandang yang positif. Kamu juga bisa lakukan cara-cara kecil, bermakna dan sehat tentunya untuk memanjakan diri dari waktu ke waktu.</p>\r\n\r\n<p><em><strong>7. Take Care of Yourself Spritually</strong></em><br />\r\nLuangin waktu untuk memberi makan jiwa kamu dan menjaga hubungan dengan Sang Pencipta lewat perenungan, doa, membaca materi-materi rohani dan/atau menghadiri kebaktian keagamaan.</p>\r\n\r\n<p><br />\r\nNah itu beberapa cara yang bisa kamu lakuin untuk memulihkan energi positif kamu, TOUCHEERS.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p>Referensi :</p>\r\n\r\n<p>https://www.lifehack.org/569466/how-regain-your-positive-energy-when-things-are-getting-tough</p>', 'Faldo Julians Lambiombir (@hashtagfaldo)', 'PUBLISH', 2, NULL, NULL, '2021-01-31 03:00:00', '2021-10-26 11:15:07'),
(4, '4 Steps to Prevent Sexual Assault', '4-steps-to-prevent-sexual-assault', '1635323874_New Logo TOUCHE (transparant).PNG', '<p style=\"text-align:justify\">Hai TOUCHEERS!</p>\r\n\r\n<p style=\"text-align:justify\">Penting banget! Harus dibaca!!</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Setiap orang memiliki peran untuk mencegah serangan seksual, dan ada banyak cara yang dapat kamu lakukan untuk menolong seseorang atau dirimu sendiri jika berada di situasi yang sangat &nbsp;berisiko adanya kekerasan seksual. Kunci untuk menjaga seseorang atau bahkan dirimu tetap aman adalah belajar cara untuk turun tangan dengan cara yang cocok dengan situasi dan tingkat kenyamanan kamu. Jika kamu sudah paham dengan pendekatan ini, maka hal ini tentunya dapat memberikan keyakinan untuk melangkah ketika sesuatu tidak benar. Nah, nama pendekatannya adalah <strong><em>CARE : Create a distraction, Ask directly, Refer to an authority, Enlist others.</em></strong> Yuk langsung kita bahas apa aja nih maksudnya!</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong><em>1. Create a distraction</em></strong><br />\r\nLakukan apa yang kamu bisa untuk mengganggu situasi. Gangguan bisa memberi orang yang berisiko untuk pergi ke tempat yang aman. &nbsp;Contohnya, kamu bisa menghentikan percakapan dengan alihkan perhatian seperti, &quot;Ayo beli pizza, aku lapar,&quot; atau &quot;Pesta ini payah. Mari kita coba di tempat lain.&quot;</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>2. Ask directly&nbsp;</strong></em><br />\r\nUntuk menolong temanmu, kamu bisa berbicara langsung dengannya untuk mengalihkan situasi. Contohnya, kamu bisa mengajukan pertanyaan seperti &quot;Dengan siapa kau datang ke sini?&quot; Atau &quot;Kau ingin aku tinggal bersamamu?&quot;</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>3. Refer to an authority</strong></em>&nbsp;<br />\r\nKadang-kadang, cara yang paling aman untuk turun tangan adalah dengan meminta tolong kepada pihak netral dengan wewenang untuk mengubah situasi, seperti penjaga keamanan.</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>4. Enlist others</strong></em><br />\r\nKita dapat merasa terintimidasi jika menghadapi situasi itu sendirian. Kamu bisa meminta tolong orang lain untuk membantumu, seperti temanmu atau bahkan saudaramu.</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\nNah itu dia TOUCHEERS, 4 langkah yang bisa dilakukan ketika kamu mengalami kekerasan seksual atau ketika kamu melihat ada orang lain yang berisiko untuk mengalami kekerasan seksual. Mampu atau tidak mengubah hasil akhirnya, dengan berani melangkah tentunya ini membantu mencegah adanya kekerasan seksual.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<hr />\r\n<p>Referensi :</p>\r\n\r\n<p>https://www.rainn.org/articles/steps-you-can-take-prevent-sexual-assault</p>', 'Faldo Julians Lambiombir (@hashtagfaldo)', 'PUBLISH', 2, NULL, NULL, '2021-02-27 16:49:59', '2021-10-27 01:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('PUBLISH','DRAFT') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `desc`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Webinar Touche', 'Webinar Women Forgiveness', '1635321817_WWF 9.jpeg', 'PUBLISH', '2021-10-26 22:13:51', '2021-10-27 01:03:37'),
(2, 'Sosialisasi Touche', NULL, '1635311678_foto 2.jpeg', 'PUBLISH', '2021-10-26 22:14:38', '2021-10-27 01:06:18'),
(3, 'Touche', NULL, '1635323532_IMG_1084 2.JPG', 'PUBLISH', '2021-10-27 01:32:12', '2021-10-27 01:32:12'),
(4, 'Webinar', NULL, '1635323633_photo1632732511.jpeg', 'PUBLISH', '2021-10-27 01:33:53', '2021-10-27 01:33:53'),
(5, 'Touche Webinar', NULL, '1635323652_photo1632732396.jpeg', 'PUBLISH', '2021-10-27 01:34:12', '2021-10-27 01:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_11_075559_create_categories_table', 1),
(5, '2020_01_15_073458_create_articles_table', 1),
(6, '2020_01_22_030736_update_articles_table', 1),
(7, '2020_01_22_031636_create_article_category_table', 1),
(8, '2020_01_23_045449_create_abouts_table', 1),
(9, '2020_02_04_154106_add_description_table_categories', 1),
(10, '2020_02_06_142620_create_destinations_table', 1),
(11, '2021_09_29_153853_create_articles_table', 2),
(12, '2021_10_26_162448_create_galleries_table', 3),
(13, '2021_10_27_014331_create_galleries_table', 4),
(14, '2021_10_27_014427_create_galleries_table', 5),
(15, '2021_10_27_044337_create_galleries_table', 6),
(16, '2021_10_27_044548_create_galleries_table', 7),
(17, '2021_10_27_045824_create_galleries_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alfredo', 'alfredo.adiyasa@gmail.com', NULL, '$2y$10$smsoqyWF7EVFlGGk2sApOOa.v2fqGJWodAktOyJr7/VMwLl5Rt/Mi', NULL, '2021-08-26 01:51:13', '2021-08-26 01:51:13'),
(2, 'Admin Touche', 'admin@touche.id', NULL, '$2y$10$0v3QuTBtTWUt7d7Z9YZ5l.RXvpzsSu0idkt.N8NgESLd83K/NYy9K', NULL, '2021-09-24 06:50:10', '2021-09-24 06:50:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
