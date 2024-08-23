-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 22, 2024 at 12:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int NOT NULL DEFAULT '20',
  `image_path` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classification` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default' COMMENT 'default,exclusive,featured,upcoming',
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `short_description`, `full_description`, `price`, `quantity`, `image_path`, `image_name`, `category`, `classification`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Aggro Who', 'Alana Abdool', 'The primal intensity of a predator\'s gaze, with vibrant red eyes that burn with untamed fury, drawing you into the depths of its wild spirit. The minimalist strokes of the feathers contrast sharply with the piercing detail of the owl\'s stare, creating a powerful tension between raw emotion and abstract simplicity.', 200.00, 1, '/images/products/', 'aggro_who.jpg', 'Acrylic Paiting', 'default', 'active', '2024-05-17 19:28:56', '2024-08-13 03:42:33'),
(2, 'Alien Lands', 'Céléna Espinoza', 'Against a vibrant purple sky, slender trees stretch upwards, their dark forms etched like delicate shadows. The blotched leaves add a touch of whimsy, while the light shrubbery and serene lake at the bottom ground the scene in a tranquil yet mysterious beauty, as if nature itself is whispering secrets in twilight hues.', 530.00, 1, '/images/products/', 'alien_lands.jpg', 'Acrylic Paiting', 'default', 'active', '2024-05-20 08:32:57', '2024-08-13 03:42:33'),
(3, 'Armor', 'Alana Abdool', 'A transformatiopn of the humble rooster into a noble warrior, clad in intricately detailed knight\'s armor that shimmers with every stroke of the pen. The sharp, deliberate lines give life to this proud and regal figure, standing tall with the confidence of a battle-hardened hero, ready to defend its realm with courage and honor.', 150.00, 1, '/images/products/', 'armor.jpg', 'Pen And Ink', 'default', 'active', '2024-08-03 18:09:49', '2024-08-13 03:42:33'),
(4, 'Pollination', 'Shannon Yip-Ying', 'A harmonious dance of earthy greens, browns, and oranges brings these butterflies to life as they gracefully orbit around delicate pink flowers. The thin green leaves weave through the scene, creating a serene, almost hypnotic rhythm that evokes the gentle balance of nature’s palette in full bloom.', 420.00, 1, '/images/products/', 'butterflies.jpg', 'Acrylic Paiting', 'default', 'active', '2024-06-18 05:01:02', '2024-08-13 03:42:33'),
(5, 'Camoflage', 'Alana Abdool', 'This mixed media chameleon emerges from the canvas, a mesmerizing blend of textured wood, vibrant acrylic, and entwined twine. The wooden pieces meticulously accentuate the creature’s form, adding a tactile dimension as it clings to a simple brown branch, all set against a stark black background. The result is a striking fusion of natural materials and artistic vision, capturing the chameleon’s stealth and adaptability in a tangible, sculptural form.', 500.00, 1, '/images/products/', 'camouflage.jpg', 'Mixed Media', 'default', 'active', '2024-07-02 12:37:59', '2024-08-13 03:42:33'),
(6, 'Peace', 'Shannon Yip-Ying', 'In this tender drawing, a cat and butterfly defy their natural instincts, gently touching noses in a moment of fragile harmony. The scene captures a fleeting truce between predator and prey, where curiosity overcomes instinct, and the delicate balance of nature is momentarily paused in a quiet exchange of trust.', 140.00, 1, '/images/products/', 'cat_and_butterfly.jpg', 'Sketchwork', 'default', 'active', '2024-07-11 21:35:43', '2024-08-13 03:42:33'),
(7, 'Dulahin', 'Céléna Espinoza', 'Adorned in a vibrant pink and blue sari, this Indian bride radiates grace and tradition, her bangles jingling softly with each movement. The delicate chain around her neck glistens, while the sindoor on her forehead marks her as a newlywed dulahin, symbolizing love and devotion in a moment of timeless beauty.', 250.00, 1, '/images/products/', 'dulahin.jpg', 'Waterclour Painting', 'default', 'active', '2024-08-22 00:34:50', '2024-08-22 00:34:56'),
(8, 'Ella Finalmente Cree', 'Caiphus Moore', 'The carefree joy of a young woman can be seen as she blows bubbles, her expression a mix of concentration and delight, embodying a fleeting attempt at the youthful innocence and wonder she once had.', 1400.00, 1, '/images/products/', 'ella.jpg', 'Sketchwork', 'default', 'active', '2024-08-22 00:35:02', '2024-08-22 00:35:04'),
(9, 'Fancy Gentleman', 'Alana Abdool', 'A portrayal of a sophisticated cat, its long whiskers elegantly framing a face marked by a sly, witty expression. Clad in a dapper tuxedo and bow tie, topped with a classic black top hat, the feline exudes an air of refined charm and playful cunning, as if ready to charm and outwit with a mere glance.', 250.00, 1, '/images/products/', 'fancy_gentleman.jpg', 'Pen And Ink', 'default', 'active', '2024-08-22 00:35:05', '2024-08-22 00:35:07'),
(10, 'Yellow Petals', 'Céléna Espinoza', 'This enchanting top-down view of a sunflower captures its vibrant petals in various shades, radiating warmth and vitality. The surrounding green, reminiscent of leaves, adds a magical touch, transforming the scene into a captivating burst of color that feels both grounded and ethereal.', 510.00, 1, '/images/products/', 'yellow_petals.jpg', 'Acrylic Paiting', 'default', 'active', '2024-08-22 00:35:08', '2024-08-22 00:35:10'),
(11, 'Stream Overlook', 'Anonymous', 'An offering of a breathtaking view from a bamboo bridge, spanning a large, meandering river that cascades into distant rapids. Nestled in a valley framed by rugged brown stone cliffs, the scene captures the untamed beauty of nature, with distant trees peeking out from the corners, adding a touch of serene contrast to the powerful flow of the river.', 830.00, 1, '/images/products/', 'forest.jpg', 'Colour Pencil', 'default', 'active', '2024-08-22 00:35:11', '2024-08-22 00:35:13'),
(12, 'Hill House', 'Anonymous', 'This landscape  beautifully captures the dramatic cliffs, where small water streams cascade gracefully down the rugged face, their descent culminating in the vast ocean to the right. Towering trees crown the cliff, framing a quaint, distant house that hints at solitude amidst nature’s grandeur. A seagull, poised in the foreground, adds a touch of life and movement to the serene, coastal vista.', 490.00, 1, '/images/products/', 'hill_house.jpg', 'Waterclour Painting', 'default', 'active', '2024-08-22 00:35:14', '2024-08-22 00:35:15'),
(13, 'Lake Tree', 'Anonymous', 'In this vibrant , a serene pond mirrors the burnt yellow foliage of a majestic tree that stands sentinel by its edge. The water\'s edge is bathed in rich blues and purples, creating a striking contrast with the expansive savannah in the background, where tall trees punctuate the horizon with a sense of distant grandeur. The multitude of colors blends harmoniously, evoking a tranquil yet dynamic landscape that celebrates nature\'s diverse palette.', 175.00, 1, '/images/products/', 'lake_tree.jpg', 'Waterclour Painting', 'default', 'active', '2024-08-22 00:35:16', '2024-08-22 00:35:18'),
(14, 'Morning Walks', 'Alana Abdool', 'This mixedMedia piece combines the earthy richness of coffee stains with the precision of black pen to create a compelling forest scene in the foreground. Behind this verdant expanse, a majestic mountain looms, shrouded in ethereal clouds that blend seamlessly with the coffee\'s organic textures, evoking a sense of mystery and grandeur. The interplay between the dark, detailed forest and the soft, atmospheric mountain creates a striking contrast that captures the awe-inspiring beauty of nature.', 375.00, 1, '/images/products/', 'morning_walks.jpg', 'Mixed Media', 'default', 'active', '2024-08-22 00:35:20', '2024-08-22 00:35:22'),
(15, 'Mountain View', 'Alana Abdool', 'This  depicts a lush forest enveloping a vast lake, its tranquil waters reflecting the rich greenery of the surrounding trees. Beyond, gently rolling mountains rise in the distance, their subtle contours blending harmoniously with the serene landscape, creating a sense of peaceful isolation and natural splendor.', 200.00, 1, '/images/products/', 'mountain_view.jpg', 'Acrylic Paiting', 'default', 'active', '2024-08-22 00:35:23', '2024-08-22 00:35:25'),
(16, 'Over Joyed', 'Caiphus Moore', 'In this audacious masterpiece, tribal motifs in faint black seem almost to whisper ancient secrets beneath a bold, crimson canvas. The centerpiece—a resplendent woman in regal purple—blows a grandiose, reflective bubble with an extravagant yellow wand and container, each detail dripping with opulence. The vivid interplay of colors and forms is a celebration of transcendent artistry, daringly asserting its magnificence against the backdrop of a vividly transformed canvas.', 2600.00, 1, '/images/products/', 'ovrlvd.jpg', 'Oil Painting', 'default', 'active', '2024-08-22 00:35:26', '2024-08-22 00:35:27'),
(17, 'Over Loved', 'Caiphus Moore', 'This enthralling creation exhibits an ethereal fusion of form and color, where a sublime nude woman, adorned with a lavish bead necklace, emerges from a beguiling haze of green and black. The deliberate paint drips cascade down the canvas, adding a touch of unrestrained elegance, while the translucent bubble and her exquisitely delineated face are the only elements daring to assert themselves against the obscured, near-phantom background. Here, the interplay of positive and negative space achieves a masterful balance, creating an enigmatic tableau where only the most captivating features stand in stark, beguiling contrast to their elusive surroundings.', 3400.00, 1, '/images/products/', 'ovrlvd.jpg', 'Oil Painting', 'default', 'active', '2024-08-22 00:35:28', '2024-08-22 00:35:30'),
(18, 'Over You', 'Caiphus Moore', 'Behold this audaciously splendid composition where a lithe yet powerfully defined woman, clad in a cerulean tank top, effortlessly conjures bubbles of ordinary hue against a variant blue background that oozes sophistication. Her majestic afro crowns her with an air of regal defiance, while the bubbles—mundane in their simplicity—float amidst the nuanced shades of blue, elevating the entire scene to a realm of understated, yet undeniable, artistic grandeur.', 5500.00, 1, '/images/products/', 'ovryou.jpg', 'Oil Painting', 'default', 'active', '2024-08-22 00:35:31', '2024-08-22 00:35:32'),
(19, 'Rodance', 'Alana Abdool', 'In this charming illustration, a delightful mouse tenderly offers a flower to a curious cat, both creatures locked in a moment of mutual fascination. The scene radiates a whimsical sense of peace and gentle curiosity, capturing an endearing exchange where predator and prey share a serene, unexpected connection.', 300.00, 1, '/images/products/', 'rodance.jpg', 'Pen And Ink', 'default', 'active', '2024-08-22 00:35:33', '2024-08-22 00:35:34'),
(20, 'Slippery', 'Alana Abdool', 'Alana Abdool\r\nfull description    : This hilariously delightful scene features a soggy frog lounging in a puddle of its own slime, topped off with a banana peel perched comically on its head. The frog’s derpy expression and the absurdity of the banana hat make for a whimsical and entertaining moment.', 275.00, 1, '/images/products/', 'slippery.jpg', 'Pen And Ink', 'default', 'active', '2024-08-22 00:35:35', '2024-08-22 00:35:37'),
(21, 'Stained Glass', 'Alana Abdool', 'This stained glass design, brought to life with watercolor , features a vibrant array of pink flowers, green leaves, and a rich brown stem. The interplay of various tones, tints, and hues creates a dynamic and captivating pattern, transforming each element into a radiant splash of color and light, reminiscent of a kaleidoscope in bloom.', 400.00, 1, '/images/products/', 'stained_glass.jpg', 'Waterclour Painting', 'default', 'active', '2024-08-22 00:35:38', '2024-08-22 00:35:39'),
(22, 'Stargaze Lake', 'Céléna Espinoza', 'This captivating scene captures a tranquil lakeside setting where the water transitions from serene blue to warm yellow and vibrant orange, blending seamlessly into the lush forest that frames the horizon. Above, the sky echoes this gradient, moving from a fiery orange to a soft yellow and finally to a deep, tranquil blue, all under the watchful gaze of a luminous moon and twinkling stars, creating a harmonious dance of colors and celestial beauty.', 560.00, 1, '/images/products/', 'stargaze_lake.jpg', 'Acrylic Paiting', 'default', 'active', '2024-08-22 00:35:40', '2024-08-22 00:35:42'),
(23, 'Stipple Fish', 'Alana Abdool', 'A vivid portrayl of a duppy fish with its mouth agape, revealing a dramatic and intriguing expression. The large, intricately detailed fins stretch out toward the viewer, adding a dynamic sense of depth and movement to the design, capturing the fish\'s imposing and captivating presence.', 350.00, 1, '/images/products/', 'stipple_fish.jpg', 'Pen And Ink', 'default', 'active', '2024-08-22 00:35:43', '2024-08-22 00:35:44'),
(24, 'Sunset Lake', 'Alana Abdool', 'This landscape captures a breathtaking scene where a rugged, rocky lake is surrounded by towering trees and set against a majestic mountainous backdrop. The colors of the setting sun bathe the sky and its reflection in the lake in warm, glowing hues, creating a harmonious and tranquil atmosphere that highlights the serene beauty of the landscape.', 525.00, 1, '/images/products/', 'sunset_lake.jpg', 'Oil Painting', 'default', 'active', '2024-08-22 00:35:46', '2024-08-22 00:35:47'),
(25, 'Tea and Flowers', 'Anonymous', 'This still life composition elegantly showcases a delicate teacup and a vase brimming with pink tulips, set against the stark contrast of a black background. The white tablecloth adds a crisp, refined touch, highlighting the soft hues of the tulips and the graceful curves of the teacup, creating a timeless and sophisticated tableau.', 635.00, 1, '/images/products/', 'tea_and_flowers.jpg', 'Waterclour Painting', 'default', 'active', '2024-08-22 00:35:48', '2024-08-22 00:35:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
