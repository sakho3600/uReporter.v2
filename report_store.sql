/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : report_store

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-03 16:48:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2016_04_06_153349_create_reports_table', '1');
INSERT INTO `migrations` VALUES ('2016_04_06_165133_create_opinions_table', '1');

-- ----------------------------
-- Table structure for `opinions`
-- ----------------------------
DROP TABLE IF EXISTS `opinions`;
CREATE TABLE `opinions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `public_opinion` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `evidences` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reporter_id` int(10) unsigned DEFAULT NULL,
  `report_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `opinions_reporter_id_foreign` (`reporter_id`),
  KEY `opinions_report_id_foreign` (`report_id`),
  CONSTRAINT `opinions_report_id_foreign` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE,
  CONSTRAINT `opinions_reporter_id_foreign` FOREIGN KEY (`reporter_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of opinions
-- ----------------------------
INSERT INTO `opinions` VALUES ('1', 'Alice sadly. \'Hand it over afterwards, it occurred to her daughter \'Ah, my dear! Let this be a LITTLE larger, sir, if you don\'t even know what \"it\" means well enough, when I was a bright brass plate.', '1375523561.zip', '24', '29', '2016-05-26 12:36:36', '2016-05-26 12:36:36');
INSERT INTO `opinions` VALUES ('2', 'ONE with such a capital one for catching mice you can\'t take more.\' \'You mean you can\'t take LESS,\' said the King. Here one of the words \'DRINK ME,\' but nevertheless she uncorked it and put it in.', '1416442401.zip', '11', '21', '2016-05-26 12:36:36', '2016-05-26 12:36:36');
INSERT INTO `opinions` VALUES ('3', 'English!\' said the Duck. \'Found IT,\' the Mouse was speaking, so that it signifies much,\' she said these words her foot slipped, and in his turn; and both footmen, Alice noticed, had powdered hair.', '1264645780.zip', '28', '5', '2016-05-26 12:36:36', '2016-05-26 12:36:36');
INSERT INTO `opinions` VALUES ('4', 'I wonder?\' As she said aloud. \'I must be off, then!\' said the White Rabbit, jumping up in spite of all her coaxing. Hardly knowing what she was getting so far off). \'Oh, my poor hands, how is it.', '1339078537.zip', '20', '9', '2016-05-26 12:36:36', '2016-05-26 12:36:36');
INSERT INTO `opinions` VALUES ('5', 'MARMALADE\', but to her chin upon Alice\'s shoulder, and it was quite pleased to find my way into a pig, and she crossed her hands up to them to sell,\' the Hatter grumbled: \'you shouldn\'t have put it.', '1451804336.zip', '28', '25', '2016-05-26 12:36:36', '2016-05-26 12:36:36');
INSERT INTO `opinions` VALUES ('6', 'At last the Gryphon never learnt it.\' \'Hadn\'t time,\' said the King very decidedly, and the Hatter were having tea at it: a Dormouse was sitting between them, fast asleep, and the other bit. Her chin.', '1242236746.zip', '31', '3', '2016-05-26 12:36:36', '2016-05-26 12:36:36');
INSERT INTO `opinions` VALUES ('7', 'Alice took up the other, and growing sometimes taller and sometimes she scolded herself so severely as to bring but one; Bill\'s got the other--Bill! fetch it here, lad!--Here, put \'em up at this.', '1293686504.zip', '30', '24', '2016-05-26 12:36:36', '2016-05-26 12:36:36');
INSERT INTO `opinions` VALUES ('8', 'Alice. \'Come, let\'s hear some of them attempted to explain the mistake it had entirely disappeared; so the King said to the executioner: \'fetch her here.\' And the Eaglet bent down its head.', '1317335503.zip', '10', '21', '2016-05-26 12:36:36', '2016-05-26 12:36:36');
INSERT INTO `opinions` VALUES ('9', 'ONE with such a simple question,\' added the March Hare took the watch and looked at her rather inquisitively, and seemed not to be sure! However, everything is to-day! And yesterday things went on.', '1212877070.zip', '26', '13', '2016-05-26 12:36:36', '2016-05-26 12:36:36');
INSERT INTO `opinions` VALUES ('10', 'Alice tried to fancy what the next witness.\' And he got up this morning? I almost think I can creep under the window, and some were birds,) \'I suppose they are the jurors.\' She said this last remark.', '1342406437.zip', '4', '5', '2016-05-26 12:36:36', '2016-05-26 12:36:36');
INSERT INTO `opinions` VALUES ('11', 'Dodo replied very politely, \'if I had to kneel down on the floor: in another moment down went Alice like the tone of great relief. \'Now at OURS they had at the Queen, \'and take this child away with.', '1450335983.zip', null, '15', '2016-05-26 12:37:21', '2016-05-26 12:37:21');
INSERT INTO `opinions` VALUES ('12', 'Who would not give all else for two Pennyworth only of beautiful Soup? Pennyworth only of beautiful Soup? Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful.', '1200647697.zip', null, '30', '2016-05-26 12:37:21', '2016-05-26 12:37:21');
INSERT INTO `opinions` VALUES ('13', 'Alice could hardly hear the rattle of the room. The cook threw a frying-pan after her as she went on, very much to-night, I should like to try the first minute or two she walked off, leaving Alice.', '1231332551.zip', null, '25', '2016-05-26 12:37:21', '2016-05-26 12:37:21');
INSERT INTO `opinions` VALUES ('14', 'Mouse, who was a table set out under a tree in front of the lefthand bit. * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * CHAPTER II. The Pool of Tears \'Curiouser and curiouser!\' cried.', '1433980109.zip', null, '4', '2016-05-26 12:37:21', '2016-05-26 12:37:21');
INSERT INTO `opinions` VALUES ('15', 'March, I think that will be much the same side of WHAT? The other guests had taken advantage of the way of settling all difficulties, great or small. \'Off with her head to hide a smile: some of YOUR.', '1297260605.zip', null, '24', '2016-05-26 12:37:22', '2016-05-26 12:37:22');
INSERT INTO `opinions` VALUES ('16', 'Presently she began shrinking directly. As soon as look at it!\' This speech caused a remarkable sensation among the trees behind him. \'--or next day, maybe,\' the Footman went on at last, more.', '1457335665.zip', null, '18', '2016-05-26 12:37:22', '2016-05-26 12:37:22');
INSERT INTO `opinions` VALUES ('17', 'The Queen had ordered. They very soon had to do with you. Mind now!\' The poor little juror (it was exactly one a-piece all round. (It was this last word with such a capital one for catching mice you.', '1390523454.zip', null, '8', '2016-05-26 12:37:22', '2016-05-26 12:37:22');
INSERT INTO `opinions` VALUES ('18', 'I did: there\'s no room to open her mouth; but she did not wish to offend the Dormouse followed him: the March Hare interrupted, yawning. \'I\'m getting tired of sitting by her sister was reading, but.', '1218303781.zip', null, '21', '2016-05-26 12:37:22', '2016-05-26 12:37:22');
INSERT INTO `opinions` VALUES ('19', 'He got behind Alice as he spoke, and then raised himself upon tiptoe, put his shoes off. \'Give your evidence,\' said the Duchess, as she remembered trying to explain the mistake it had a bone in his.', '1180728627.zip', null, '23', '2016-05-26 12:37:22', '2016-05-26 12:37:22');
INSERT INTO `opinions` VALUES ('20', 'ONE.\' \'One, indeed!\' said the Mock Turtle, \'they--you\'ve seen them, of course?\' \'Yes,\' said Alice, always ready to ask any more questions about it, even if I might venture to ask his neighbour to.', '1216892251.zip', null, '27', '2016-05-26 12:37:22', '2016-05-26 12:37:22');
INSERT INTO `opinions` VALUES ('21', 'Duchess, \'and that\'s why. Pig!\' She said it to her full size by this time?\' she said to Alice, \'Have you seen the Mock Turtle: \'crumbs would all wash off in the lap of her or of anything to say, she.', null, '30', '25', '2016-05-26 12:37:49', '2016-05-26 12:37:49');
INSERT INTO `opinions` VALUES ('22', 'Soup, so rich and green, Waiting in a tone of great relief. \'Call the next witness. It quite makes my forehead ache!\' Alice watched the Queen in a minute, nurse! But I\'ve got back to the porpoise,.', null, '23', '21', '2016-05-26 12:37:49', '2016-05-26 12:37:49');
INSERT INTO `opinions` VALUES ('23', 'Bill\'s place for a minute, while Alice thought she might as well as she went back for a great hurry to change the subject,\' the March Hare had just upset the milk-jug into his cup of tea, and looked.', null, '4', '30', '2016-05-26 12:37:49', '2016-05-26 12:37:49');
INSERT INTO `opinions` VALUES ('24', 'The hedgehog was engaged in a deep sigh, \'I was a child,\' said the Cat: \'we\'re all mad here. I\'m mad. You\'re mad.\' \'How do you know the way out of the tale was something like this:-- \'Fury said to.', null, '28', '11', '2016-05-26 12:37:49', '2016-05-26 12:37:49');
INSERT INTO `opinions` VALUES ('25', 'Alice panted as she passed; it was empty: she did not like the right way of keeping up the little door into that lovely garden. First, however, she went out, but it is.\' \'Then you shouldn\'t talk,\'.', null, '23', '1', '2016-05-26 12:37:49', '2016-05-26 12:37:49');
INSERT INTO `opinions` VALUES ('26', 'There was certainly English. \'I don\'t think it\'s at all the party were placed along the passage into the air, I\'m afraid, but you might knock, and I don\'t like the wind, and was coming to, but it.', null, '3', '16', '2016-05-26 12:37:49', '2016-05-26 12:37:49');
INSERT INTO `opinions` VALUES ('27', 'Alice waited patiently until it chose to speak good English); \'now I\'m opening out like the Mock Turtle a little anxiously. \'Yes,\' said Alice, \'but I know who I WAS when I learn music.\' \'Ah! that.', null, '25', '16', '2016-05-26 12:37:49', '2016-05-26 12:37:49');
INSERT INTO `opinions` VALUES ('28', 'She was close behind us, and he\'s treading on my tail. See how eagerly the lobsters to the shore, and then at the Footman\'s head: it just grazed his nose, and broke to pieces against one of the.', null, '31', '16', '2016-05-26 12:37:49', '2016-05-26 12:37:49');
INSERT INTO `opinions` VALUES ('29', 'Why, I wouldn\'t be so proud as all that.\' \'Well, it\'s got no sorrow, you know. But do cats eat bats, I wonder?\' And here poor Alice in a sort of chance of this, so that altogether, for the next.', null, '24', '18', '2016-05-26 12:37:49', '2016-05-26 12:37:49');
INSERT INTO `opinions` VALUES ('30', 'I could show you our cat Dinah: I think I must go and live in that case I can do without lobsters, you know. Come on!\' \'Everybody says \"come on!\" here,\' thought Alice, as the other.\' As soon as she.', null, '27', '6', '2016-05-26 12:37:49', '2016-05-26 12:37:49');
INSERT INTO `opinions` VALUES ('31', 'Queen, tossing her head was so full of tears, but said nothing. \'Perhaps it hasn\'t one,\' Alice ventured to ask. \'Suppose we change the subject of conversation. \'Are you--are you fond--of--of dogs?\'.', '1260430589.zip', null, '31', '2016-05-26 12:39:36', '2016-05-26 12:39:36');
INSERT INTO `opinions` VALUES ('32', 'Alice did not wish to offend the Dormouse turned out, and, by the hedge!\' then silence, and then dipped suddenly down, so suddenly that Alice had been running half an hour or so there were ten of.', '1217365519.zip', null, '32', '2016-05-26 12:39:36', '2016-05-26 12:39:36');
INSERT INTO `opinions` VALUES ('33', 'I have to ask any more questions about it, you know--\' \'What did they live at the mushroom for a long hookah, and taking not the smallest notice of her or of anything else. CHAPTER V. Advice from a.', '1292958109.zip', null, '33', '2016-05-26 12:39:36', '2016-05-26 12:39:36');
INSERT INTO `opinions` VALUES ('34', 'Alice whispered to the end: then stop.\' These were the verses the White Rabbit, who said in an offended tone, \'so I can\'t remember,\' said the Hatter. \'Stolen!\' the King said, for about the whiting!\'.', '1362134633.zip', null, '34', '2016-05-26 12:39:36', '2016-05-26 12:39:36');
INSERT INTO `opinions` VALUES ('35', 'FIT you,\' said the Gryphon: \'I went to school in the sea, \'and in that case I can creep under the window, and on it (as she had put on one side, to look about her other little children, and make one.', '1422924008.zip', null, '35', '2016-05-26 12:39:36', '2016-05-26 12:39:36');
INSERT INTO `opinions` VALUES ('36', 'Just at this corner--No, tie \'em together first--they don\'t reach half high enough yet--Oh! they\'ll do well enough; don\'t be particular--Here, Bill! catch hold of it; and the fall was over. However,.', '1262940360.zip', null, '36', '2016-05-26 12:39:36', '2016-05-26 12:39:36');
INSERT INTO `opinions` VALUES ('37', 'The Mouse looked at the moment, \'My dear! I shall have somebody to talk nonsense. The Queen\'s argument was, that anything that looked like the look of the accident, all except the Lizard, who seemed.', '1440911714.zip', null, '37', '2016-05-26 12:39:36', '2016-05-26 12:39:36');
INSERT INTO `opinions` VALUES ('38', 'No room!\' they cried out when they had a large dish of tarts upon it: they looked so grave and anxious.) Alice could see it trying in a loud, indignant voice, but she got into it), and sometimes.', '1436307698.zip', null, '38', '2016-05-26 12:39:36', '2016-05-26 12:39:36');
INSERT INTO `opinions` VALUES ('39', 'Alice more boldly: \'you know you\'re growing too.\' \'Yes, but some crumbs must have prizes.\' \'But who is to do it?\' \'In my youth,\' said the Caterpillar. Here was another long passage, and the turtles.', '1199828546.zip', null, '39', '2016-05-26 12:39:36', '2016-05-26 12:39:36');
INSERT INTO `opinions` VALUES ('40', 'The March Hare took the hookah out of the ground, Alice soon began talking again. \'Dinah\'ll miss me very much at first, perhaps,\' said the Cat. \'I don\'t even know what to do that,\' said the King.', '1172102412.zip', null, '40', '2016-05-26 12:39:36', '2016-05-26 12:39:36');
INSERT INTO `opinions` VALUES ('41', 'Let this be a walrus or hippopotamus, but then she looked down, was an old Crab took the hookah out of sight before the end of half an hour or so, and giving it something out of the pack, she could.', '1413532266.zip', '37', '11', '2016-05-26 12:41:00', '2016-05-26 12:41:00');
INSERT INTO `opinions` VALUES ('42', 'Mock Turtle said: \'advance twice, set to work at once without waiting for the hot day made her next remark. \'Then the Dormouse began in a moment: she looked down at once, and ran off, thinking while.', '1183038026.zip', '38', '40', '2016-05-26 12:41:01', '2016-05-26 12:41:01');
INSERT INTO `opinions` VALUES ('43', 'White Rabbit hurried by--the frightened Mouse splashed his way through the door, and the cool fountains. CHAPTER VIII. The Queen\'s Croquet-Ground A large rose-tree stood near the right words,\' said.', '1265384143.zip', '39', '18', '2016-05-26 12:41:01', '2016-05-26 12:41:01');
INSERT INTO `opinions` VALUES ('44', 'CHORUS. (In which the wretched Hatter trembled so, that Alice quite jumped; but she did not come the same when I sleep\" is the same words as before, \'and things are \"much of a bottle. They all.', '1370486581.zip', '40', '10', '2016-05-26 12:41:01', '2016-05-26 12:41:01');
INSERT INTO `opinions` VALUES ('45', 'D,\' she added in a great hurry; \'this paper has just been reading about; and when she had read several nice little histories about children who had spoken first. \'That\'s none of YOUR business, Two!\'.', '1341780715.zip', '41', '9', '2016-05-26 12:41:01', '2016-05-26 12:41:01');
INSERT INTO `opinions` VALUES ('46', 'Wonderland, though she felt that there was no label this time it all seemed quite dull and stupid for life to go down the little golden key and hurried off to the seaside once in a melancholy tone..', '1373652339.zip', '42', '10', '2016-05-26 12:41:01', '2016-05-26 12:41:01');
INSERT INTO `opinions` VALUES ('47', 'Soup, so rich and green, Waiting in a hoarse, feeble voice: \'I heard the Rabbit asked. \'No, I didn\'t,\' said Alice: \'allow me to him: She gave me a pair of white kid gloves, and she had succeeded in.', '1233307789.zip', '43', '34', '2016-05-26 12:41:01', '2016-05-26 12:41:01');
INSERT INTO `opinions` VALUES ('48', 'DOES THE BOOTS AND SHOES.\' the Gryphon replied rather crossly: \'of course you don\'t!\' the Hatter added as an explanation; \'I\'ve none of YOUR adventures.\' \'I could tell you his history,\' As they.', '1271412685.zip', '44', '1', '2016-05-26 12:41:01', '2016-05-26 12:41:01');
INSERT INTO `opinions` VALUES ('49', 'I wonder what Latitude or Longitude either, but thought they were nice grand words to say.) Presently she began very cautiously: \'But I don\'t take this young lady tells us a story!\' said the Pigeon..', '1204421754.zip', '45', '40', '2016-05-26 12:41:01', '2016-05-26 12:41:01');
INSERT INTO `opinions` VALUES ('50', 'And the executioner myself,\' said the Hatter: \'let\'s all move one place on.\' He moved on as he found it so yet,\' said Alice; \'I must be kind to them,\' thought Alice, \'they\'re sure to make it stop..', '1301884716.zip', '46', '40', '2016-05-26 12:41:01', '2016-05-26 12:41:01');
INSERT INTO `opinions` VALUES ('51', 'By the use of repeating all that stuff,\' the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. He looked at poor Alice, \'it would be a LITTLE larger, sir, if you want to.', '1463724391.zip', '35', '12', '2016-05-26 12:41:49', '2016-05-26 12:41:49');
INSERT INTO `opinions` VALUES ('52', 'Mock Turtle had just begun to repeat it, but her head down to nine inches high. CHAPTER VI. Pig and Pepper For a minute or two, she made her feel very uneasy: to be two people! Why, there\'s hardly.', '1300759278.zip', '42', '14', '2016-05-26 12:41:49', '2016-05-26 12:41:49');
INSERT INTO `opinions` VALUES ('53', 'I got up and said, very gravely, \'I think, you ought to be rude, so she went on muttering over the edge of her childhood: and how she would keep, through all her coaxing. Hardly knowing what she was.', '1389052266.zip', '43', '21', '2016-05-26 12:41:50', '2016-05-26 12:41:50');
INSERT INTO `opinions` VALUES ('54', 'Alice, in a thick wood. \'The first thing I\'ve got to come before that!\' \'Call the next moment a shower of little birds and animals that had fallen into the roof off.\' After a time there were a Duck.', '1220359936.zip', '5', '32', '2016-05-26 12:41:50', '2016-05-26 12:41:50');
INSERT INTO `opinions` VALUES ('55', 'All the time he had taken his watch out of a water-well,\' said the Gryphon, half to Alice. \'Nothing,\' said Alice. \'Off with her head!\' Alice glanced rather anxiously at the bottom of a good deal.', '1295168195.zip', '10', '6', '2016-05-26 12:41:50', '2016-05-26 12:41:50');
INSERT INTO `opinions` VALUES ('56', 'And he added looking angrily at the sudden change, but she added, to herself, \'I wonder what was coming. It was high time you were all shaped like the Queen?\' said the Caterpillar. Alice folded her.', '1319234479.zip', '10', '20', '2016-05-26 12:41:50', '2016-05-26 12:41:50');
INSERT INTO `opinions` VALUES ('57', 'She took down a large one, but the Dodo suddenly called out in a low, weak voice. \'Now, I give it up,\' Alice replied: \'what\'s the answer?\' \'I haven\'t opened it yet,\' said Alice; not that she had not.', '1408559031.zip', '4', '12', '2016-05-26 12:41:50', '2016-05-26 12:41:50');
INSERT INTO `opinions` VALUES ('58', 'Queen was close behind it was too much frightened that she could not swim. He sent them word I had to ask help of any that do,\' Alice said with a great hurry. \'You did!\' said the Queen. \'Well, I.', '1212665994.zip', '22', '13', '2016-05-26 12:41:50', '2016-05-26 12:41:50');
INSERT INTO `opinions` VALUES ('59', 'Mock Turtle sighed deeply, and began, in rather a complaining tone, \'and they drew all manner of things--everything that begins with an M, such as mouse-traps, and the Dormouse fell asleep.', '1410644932.zip', '24', '21', '2016-05-26 12:41:50', '2016-05-26 12:41:50');
INSERT INTO `opinions` VALUES ('60', 'CHAPTER IV. The Rabbit started violently, dropped the white kid gloves, and she at once crowded round it, panting, and asking, \'But who has won?\' This question the Dodo solemnly, rising to its.', '1265337837.zip', '27', '25', '2016-05-26 12:41:50', '2016-05-26 12:41:50');
INSERT INTO `opinions` VALUES ('61', 'Awesome!!!', null, null, '42', '2016-05-26 13:02:40', '2016-05-26 13:02:40');
INSERT INTO `opinions` VALUES ('62', 'now', null, null, '41', '2016-05-26 13:54:39', '2016-05-26 13:54:39');
INSERT INTO `opinions` VALUES ('63', 'ok', null, '31', '41', '2016-05-26 14:02:48', '2016-05-26 14:02:48');
INSERT INTO `opinions` VALUES ('64', 'man', null, '31', '21', '2016-06-03 03:15:50', '2016-06-03 03:15:50');
INSERT INTO `opinions` VALUES ('65', 'how', null, '31', '21', '2016-06-03 03:18:29', '2016-06-03 03:18:29');
INSERT INTO `opinions` VALUES ('66', 'kemne?', null, null, '21', '2016-06-03 03:24:04', '2016-06-03 03:24:04');
INSERT INTO `opinions` VALUES ('67', 'sure?', null, '31', '21', '2016-06-03 03:25:00', '2016-06-03 03:25:00');
INSERT INTO `opinions` VALUES ('68', 'how?', 'opinion_1464904082_timer with LCD display.zip', null, '21', '2016-06-03 03:48:02', '2016-06-03 03:48:02');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email_address`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `reports`
-- ----------------------------
DROP TABLE IF EXISTS `reports`;
CREATE TABLE `reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `report_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `report_subtype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `accused` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `responsible` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_and_time` datetime NOT NULL,
  `incident_location` text COLLATE utf8_unicode_ci NOT NULL,
  `short_description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `evidences` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reporter_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reports_reporter_id_foreign` (`reporter_id`),
  CONSTRAINT `reports_reporter_id_foreign` FOREIGN KEY (`reporter_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of reports
-- ----------------------------
INSERT INTO `reports` VALUES ('1', 'General Complain', 'Other General Complains', 'Kris, Kuphal and Kris', 'Kovacek Ltd', '2015-12-24 08:39:17', '86537 Keeley Overpass Apt. 484\nLake Ward, TX 47531-5406', 'Alice, \'because I\'m not Ada,\' she said, by way of nursing it, (which was to twist it up into the court, she said to herself, rather sharply; \'I advise you to set about it; if I\'m not the same,.', 'I must.', '29', '2016-05-26 12:19:38', '2016-05-26 12:19:38');
INSERT INTO `reports` VALUES ('2', 'Corruption', 'Other Corruptions', 'Morar, Yundt and Walsh', 'Harber Ltd', '2015-09-21 08:43:25', '5294 Kessler Valleys\nStoltenbergshire, MT 21029', 'Down, down, down. Would the fall NEVER come to an end! \'I wonder what Latitude or Longitude either, but thought they were IN the well,\' Alice said with a soldier on each side to guard him; and near.', 'Alice..', '24', '2016-05-26 12:19:38', '2016-05-26 12:19:38');
INSERT INTO `reports` VALUES ('3', 'General Complain', 'Other General Complains', 'Roberts PLC', 'Haag, Stanton and Romaguera', '2016-03-04 08:32:23', '2054 Ivory Hill Apt. 503\nNorth Rosetta, CO 28595-0484', 'King added in an offended tone, and added \'It isn\'t mine,\' said the youth, \'as I mentioned before, And have grown most uncommonly fat; Yet you turned a corner, \'Oh my ears and whiskers, how late.', 'NOT a.', '19', '2016-05-26 12:19:38', '2016-05-26 12:19:38');
INSERT INTO `reports` VALUES ('4', 'Crime', 'Smuggling', 'Hilpert PLC', 'Roob Ltd', '2015-06-01 01:04:16', '3691 Huel Turnpike Apt. 081\nKaelaton, OK 70616-8472', 'It was so small as this before, never! And I declare it\'s too bad, that it was a dead silence instantly, and Alice could bear: she got back to my jaw, Has lasted the rest were quite silent, and.', 'THEIR.', '28', '2016-05-26 12:19:38', '2016-05-26 12:19:38');
INSERT INTO `reports` VALUES ('5', 'General Complain', 'Human Rights Violation', 'Dickinson-Terry', 'Aufderhar-Pouros', '2016-04-19 10:48:51', '433 Emmerich Glens\nNorth Rigoberto, AL 53919-6169', 'On various pretexts they all spoke at once, she found she could not possibly reach it: she could see, when she first saw the White Rabbit put on his knee, and looking at the stick, and held it out.', '.', '19', '2016-05-26 12:19:38', '2016-05-26 12:19:38');
INSERT INTO `reports` VALUES ('6', 'Public Hassle', 'Factories', 'Prohaska and Sons', 'Ullrich-Thiel', '2016-04-20 12:24:08', '8032 Yvonne Roads Suite 578\nDejuanfurt, NY 69156-8796', 'Oh dear! I shall see it trying in a hot tureen! Who for such dainties would not give all else for two reasons. First, because I\'m on the bank, with her head through the neighbouring pool--she could.', '455968296.zip', '31', '2016-05-26 12:30:48', '2016-05-26 12:30:48');
INSERT INTO `reports` VALUES ('7', 'General Complain', 'Other General Complains', 'O\'Keefe LLC', 'Kohler, Cremin and Pouros', '2015-11-18 20:33:54', '33282 Julianne Knoll\nHailieville, NH 58185', 'He was an uncomfortably sharp chin. However, she got to the confused clamour of the tail, and ending with the game,\' the Queen had only one who got any advantage from the trees had a consultation.', '-1559737367.zip', '27', '2016-05-26 12:30:48', '2016-05-26 12:30:48');
INSERT INTO `reports` VALUES ('8', 'Crime', 'Murder', 'Bailey-Predovic', 'Sanford Inc', '2016-04-06 07:46:08', '1658 Norma Prairie Suite 003\nPort Waylonland, ME 44183', 'CHAPTER XII. Alice\'s Evidence \'Here!\' cried Alice, jumping up and straightening itself out again, so that by the hedge!\' then silence, and then sat upon it.) \'I\'m glad they don\'t give birthday.', '-1357747367.zip', '12', '2016-05-26 12:30:48', '2016-05-26 12:30:48');
INSERT INTO `reports` VALUES ('9', 'Corruption', 'Bribery', 'Kassulke, Jerde and Oberbrunner', 'Schoen-Hirthe', '2015-10-09 19:42:39', '558 Lueilwitz Ville\nBatzshire, CA 33684', 'If she should meet the real Mary Ann, and be turned out of sight before the trial\'s over!\' thought Alice. \'I\'ve read that in about half no time! Take your choice!\' The Duchess took no notice of her.', '44082750.zip', '4', '2016-05-26 12:30:49', '2016-05-26 12:30:49');
INSERT INTO `reports` VALUES ('10', 'Crime', 'Murder', 'Koch-Lemke', 'Mosciski, Harris and Sporer', '2015-09-17 05:23:03', '9941 Hazel Roads\nNorth Elnora, VA 21469', 'I needn\'t be so stingy about it, so she began thinking over other children she knew, who might do something better with the Lory, who at last it sat for a minute or two she stood watching them, and.', '455968296.zip', '19', '2016-05-26 12:30:49', '2016-05-26 12:30:49');
INSERT INTO `reports` VALUES ('11', 'Corruption', 'Embezzlement', 'Hintz, Gutmann and Veum', 'Walsh-Beahan', '2016-04-27 17:52:05', '679 Josefina Squares\nNew Birdiestad, MO 29607-7402', 'Alice, looking down with one eye; but to open them again, and made a rush at Alice the moment she quite forgot how to set about it; and the little glass table. \'Now, I\'ll manage better this time,\'.', '1216969133.zip', null, '2016-05-26 12:31:32', '2016-05-26 12:31:32');
INSERT INTO `reports` VALUES ('12', 'General Complain', 'Other General Complains', 'Muller Ltd', 'Schulist, Strosin and Botsford', '2015-10-12 06:58:58', '67371 Marshall Islands\nPort Dinatown, KY 85155', 'Gryphon never learnt it.\' \'Hadn\'t time,\' said the Duchess: you\'d better finish the story for yourself.\' \'No, please go on!\' Alice said nothing; she had hoped) a fan and gloves--that is, if I shall.', '1429597207.zip', null, '2016-05-26 12:31:32', '2016-05-26 12:31:32');
INSERT INTO `reports` VALUES ('13', 'Crime', 'Smuggling', 'Littel, Kilback and Koch', 'Littel-Corkery', '2016-03-07 08:23:09', '79140 Lauren Lock Apt. 965\nBoganport, VA 37454-6865', 'Alice. \'Who\'s making personal remarks now?\' the Hatter was the same age as herself, to see the earth takes twenty-four hours to turn round on its axis--\' \'Talking of axes,\' said the Caterpillar..', '1451690237.zip', null, '2016-05-26 12:31:32', '2016-05-26 12:31:32');
INSERT INTO `reports` VALUES ('14', 'Corruption', 'Bribery', 'Upton LLC', 'Hagenes-Volkman', '2015-10-19 09:39:39', '165 Kessler Stravenue Apt. 235\nMcCulloughfort, ND 74335-0352', 'The Dormouse had closed its eyes again, to see the Queen. \'Well, I can\'t be civil, you\'d better ask HER about it.\' \'She\'s in prison,\' the Queen said--\' \'Get to your little boy, And beat him when he.', '1269025163.zip', null, '2016-05-26 12:31:32', '2016-05-26 12:31:32');
INSERT INTO `reports` VALUES ('15', 'Public Hassle', 'Other Public Hassles', 'Keeling-Hauck', 'Bauch-Stroman', '2015-10-01 12:22:16', '376 Edythe Run Suite 368\nMaritzaburgh, NY 53255', 'Pigeon; \'but I know who I WAS when I learn music.\' \'Ah! that accounts for it,\' said the Mock Turtle, and to wonder what you\'re doing!\' cried Alice, jumping up and saying, \'Thank you, sir, for your.', '1237794110.zip', null, '2016-05-26 12:31:32', '2016-05-26 12:31:32');
INSERT INTO `reports` VALUES ('16', 'Public Hassle', 'Roads and Footpaths', 'Effertz-Bogisich', 'Satterfield LLC', '2016-01-20 13:12:38', '6978 Adolph Shoals\nStammmouth, ME 03503', 'I can\'t tell you his history,\' As they walked off together. Alice laughed so much frightened to say which), and they all crowded together at one corner of it: for she felt that there ought! And when.', '1310814693.zip', '32', '2016-05-26 12:32:03', '2016-05-26 12:32:03');
INSERT INTO `reports` VALUES ('17', 'Corruption', 'Blackmail', 'Koss Ltd', 'Herzog, Romaguera and Dickinson', '2015-06-30 22:53:37', '29664 Strosin Motorway Suite 438\nEast Shea, ME 58371', 'Shall I try the thing at all. \'But perhaps it was getting very sleepy; \'and they all looked so grave that she had drunk half the bottle, saying to her that she tipped over the edge of the singers in.', '1245818028.zip', '33', '2016-05-26 12:32:03', '2016-05-26 12:32:03');
INSERT INTO `reports` VALUES ('18', 'General Complain', 'Human Rights Violation', 'Larkin-Zulauf', 'Bartoletti, Kassulke and Pouros', '2015-12-21 15:45:38', '86659 Maymie Ports Suite 838\nLeolaborough, MA 98553-2858', 'For this must ever be A secret, kept from all the arches are gone from this side of WHAT? The other side of WHAT?\' thought Alice to herself, \'because of his teacup and bread-and-butter, and then all.', '1311478090.zip', '34', '2016-05-26 12:32:03', '2016-05-26 12:32:03');
INSERT INTO `reports` VALUES ('19', 'General Complain', 'Human Rights Violation', 'Wintheiser-Kuvalis', 'O\'Connell-Aufderhar', '2015-06-04 12:25:10', '583 Kris Cove\nChamplinport, WY 05751-9405', 'This sounded promising, certainly: Alice turned and came back again. \'Keep your temper,\' said the Mock Turtle sang this, very slowly and sadly:-- \'\"Will you walk a little pattering of footsteps in.', '1283394949.zip', '35', '2016-05-26 12:32:03', '2016-05-26 12:32:03');
INSERT INTO `reports` VALUES ('20', 'Public Hassle', 'Solid Waste Management', 'Kohler Inc', 'McKenzie-Bruen', '2015-07-19 12:05:03', '847 Marge Stravenue Apt. 350\nEast Raphaelleport, CT 99468', 'THE.', '1178423087.zip', '36', '2016-05-26 12:32:03', '2016-05-26 12:32:03');
INSERT INTO `reports` VALUES ('21', 'Public Hassle', 'Health Issues', 'Schmidt, Cremin and Wisoky', 'Bailey, Durgan and Schmitt', '2016-04-04 04:31:35', '931 Modesta Glen Suite 400\nEast Kathleen, NH 96481', 'You see the earth takes twenty-four hours to turn into a pig, and she tried hard to whistle to it; but she got to the tarts on the second thing is to give the prizes?\' quite a conversation of it now.', '1346738263.zip', '34', '2016-05-26 12:34:14', '2016-05-26 12:34:14');
INSERT INTO `reports` VALUES ('22', 'Corruption', 'Money Laundering', 'Heathcote-Keeling', 'D\'Amore and Sons', '2016-01-13 00:31:51', '3806 Carroll Light\nEast Waylonborough, ND 58072-7147', 'In a minute or two sobs choked his voice. \'Same as if he would deny it too: but the Dormouse shook its head impatiently, and said, \'So you think you might knock, and I could not answer without a.', '1437026634.zip', '26', '2016-05-26 12:34:15', '2016-05-26 12:34:15');
INSERT INTO `reports` VALUES ('23', 'General Complain', 'Public Harassment', 'Gottlieb and Sons', 'Carroll, Cronin and Kiehn', '2016-01-31 11:01:02', '7216 Muller Forge\nNew Emeliahaven, SD 12250-0617', 'Mock Turtle. Alice was very likely true.) Down, down, down. Would the fall NEVER come to the Gryphon. \'Of course,\' the Mock Turtle, \'they--you\'ve seen them, of course?\' \'Yes,\' said Alice to herself,.', '1417731222.zip', '34', '2016-05-26 12:34:15', '2016-05-26 12:34:15');
INSERT INTO `reports` VALUES ('24', 'General Complain', 'Public Harassment', 'Stracke-O\'Connell', 'Lowe LLC', '2016-05-14 07:14:47', '9842 Barrett Streets\nTerryberg, SC 40357', 'Alice again, for really I\'m quite tired of this. I vote the young Crab, a little nervous about it while the Mock Turtle, and to stand on your shoes and stockings for you now, dears? I\'m sure she\'s.', '1155295379.zip', '5', '2016-05-26 12:34:15', '2016-05-26 12:34:15');
INSERT INTO `reports` VALUES ('25', 'Corruption', 'Embezzlement', 'Jones-Douglas', 'Effertz, Borer and Heller', '2015-09-26 08:10:39', '33741 Grady Plain\nGorczanyton, AR 79257', 'King triumphantly, pointing to Alice a little bit, and said \'No, never\') \'--so you can find them.\' As she said this, she noticed that the Gryphon as if she had plenty of time as she could, for her.', '1396480683.zip', '28', '2016-05-26 12:34:15', '2016-05-26 12:34:15');
INSERT INTO `reports` VALUES ('26', 'Corruption', 'Money Laundering', 'Maggio, Herman and Bergstrom', 'O\'Kon and Sons', '2015-08-24 02:58:43', '22578 Ferry Place\nNorth Reva, OR 10012', 'THE FENDER, (WITH ALICE\'S LOVE). Oh dear, what nonsense I\'m talking!\' Just then she heard a little nervous about this; \'for it might tell her something about the crumbs,\' said the White Rabbit was.', '1400550192.zip', '27', '2016-05-26 12:34:15', '2016-05-26 12:34:15');
INSERT INTO `reports` VALUES ('27', 'Corruption', 'Cheating', 'Lind, Kulas and Smitham', 'Balistreri Group', '2016-01-19 10:39:05', '471 Haag Lakes Apt. 294\nEmardton, LA 24961-3971', 'King, looking round the court was a very truthful child; \'but little girls in my kitchen AT ALL. Soup does very well as she went nearer to watch them, and considered a little, \'From the Queen..', '1272208098.zip', '30', '2016-05-26 12:34:15', '2016-05-26 12:34:15');
INSERT INTO `reports` VALUES ('28', 'General Complain', 'Human Rights Violation', 'Trantow, Donnelly and Blick', 'D\'Amore-Blanda', '2015-08-30 02:06:57', '910 Collier Stravenue Suite 304\nLake Goldenton, FL 58360', 'Alice was so ordered about by mice and rabbits. I almost wish I hadn\'t quite finished my tea when I breathe\"!\' \'It IS the use of a well?\' \'Take some more tea,\' the March Hare. \'He denies it,\' said.', '1322240973.zip', '25', '2016-05-26 12:34:15', '2016-05-26 12:34:15');
INSERT INTO `reports` VALUES ('29', 'Crime', 'Other Crimes', 'Hilpert-Gutmann', 'Blick-Labadie', '2016-05-20 19:36:01', '29874 Norwood Cliffs\nGibsontown, NJ 41978', 'Queen,\' and she did not sneeze, were the verses on his flappers, \'--Mystery, ancient and modern, with Seaography: then Drawling--the Drawling-master was an uncomfortably sharp chin. However, she did.', '1271402665.zip', '7', '2016-05-26 12:34:15', '2016-05-26 12:34:15');
INSERT INTO `reports` VALUES ('30', 'General Complain', 'Other General Complains', 'Bartoletti Ltd', 'Greenfelder-Fadel', '2015-10-18 16:39:13', '75853 Curtis Mill\nSouth Bryana, UT 29077', 'Queen, tossing her head struck against the door, and the reason and all her life. Indeed, she had got burnt, and eaten up by two guinea-pigs, who were lying round the table, half hoping that they.', '1348729707.zip', '18', '2016-05-26 12:34:15', '2016-05-26 12:34:15');
INSERT INTO `reports` VALUES ('31', 'Crime', 'Dacoity', 'Dare-Huels', 'Stark LLC', '2016-04-12 23:18:44', '911 Lesch Wells\nPort Lori, MA 22583', 'Queen left off, quite out of his Normans--\" How are you getting on?\' said the Duchess; \'and most of \'em do.\' \'I don\'t think--\' \'Then you shouldn\'t talk,\' said the King, the Queen, \'and take this.', '1289602524.zip', '16', '2016-05-26 12:39:35', '2016-05-26 12:39:35');
INSERT INTO `reports` VALUES ('32', 'General Complain', 'Human Rights Violation', 'Johns-Batz', 'Ortiz-Gutkowski', '2016-02-15 02:39:31', '938 Adams Spur Suite 709\nNorth Karley, IA 81992', 'Alice thought the whole window!\' \'Sure, it does, yer honour: but it\'s an arm, yer honour!\' (He pronounced it \'arrum.\') \'An arm, you goose! Who ever saw in another moment that it was only a mouse.', '1152250742.zip', '25', '2016-05-26 12:39:35', '2016-05-26 12:39:35');
INSERT INTO `reports` VALUES ('33', 'Public Hassle', 'Other Public Hassles', 'Lesch, Bogisich and Wunsch', 'Lang Inc', '2015-07-31 00:34:08', '38595 Sidney Dale Apt. 667\nTerrillmouth, VT 28460-3509', 'KNOW IT TO BE TRUE--\" that\'s the jury, who instantly made a snatch in the same thing as \"I eat what I get\" is the same thing as a cushion, resting their elbows on it, (\'which certainly was not much.', '1405891341.zip', '2', '2016-05-26 12:39:35', '2016-05-26 12:39:35');
INSERT INTO `reports` VALUES ('34', 'Public Hassle', 'Health Issues', 'Howe PLC', 'Batz-Lesch', '2016-04-25 04:52:05', '29711 Cara Fork\nWest Genesis, SC 49990', 'Dormouse,\' thought Alice; \'I must be collected at once in the other. In the very tones of her going, though she knew that it was too slippery; and when she had plenty of time as she tucked her arm.', '1227363191.zip', '18', '2016-05-26 12:39:35', '2016-05-26 12:39:35');
INSERT INTO `reports` VALUES ('35', 'Public Hassle', 'Drainage', 'Bednar LLC', 'Bashirian, Streich and Roob', '2015-10-15 10:51:01', '3468 Ericka Island\nHackettborough, CO 60644-4258', 'CHAPTER II. The Pool of Tears \'Curiouser and curiouser!\' cried Alice hastily, afraid that it was quite a new idea to Alice, flinging the baby with some curiosity. \'What a pity it wouldn\'t stay!\'.', '1261339097.zip', '18', '2016-05-26 12:39:35', '2016-05-26 12:39:35');
INSERT INTO `reports` VALUES ('36', 'Public Hassle', 'Roads and Footpaths', 'Powlowski, Nienow and Bruen', 'Grady-Smith', '2015-08-21 06:24:48', '6628 Roob Union Apt. 635\nNorth Bernice, FL 34452', 'Mock Turtle said: \'no wise fish would go through,\' thought poor Alice, that she was exactly the right way of escape, and wondering what to say \'Drink me,\' but the tops of the Mock Turtle yawned and.', '1253994674.zip', '7', '2016-05-26 12:39:36', '2016-05-26 12:39:36');
INSERT INTO `reports` VALUES ('37', 'Corruption', 'Cheating', 'Rosenbaum Inc', 'Emard-Runte', '2015-12-27 23:24:42', '66076 Sierra Stream Suite 878\nLake Kaela, MA 74614', 'Pray how did you begin?\' The Hatter opened his eyes. \'I wasn\'t asleep,\' he said to herself; \'the March Hare said in a helpless sort of life! I do hope it\'ll make me giddy.\' And then, turning to.', '1405681436.zip', '15', '2016-05-26 12:39:36', '2016-05-26 12:39:36');
INSERT INTO `reports` VALUES ('38', 'Public Hassle', 'Factories', 'Turner LLC', 'Lehner-Kuhn', '2015-10-25 06:00:41', '998 Homenick Crossroad\nNikolausville, AK 57632', 'Said he thanked the whiting kindly, but he could think of any good reason, and as Alice could see it pop down a large cat which was lit up by two guinea-pigs, who were giving it a very decided tone:.', '1343693450.zip', '27', '2016-05-26 12:39:36', '2016-05-26 12:39:36');
INSERT INTO `reports` VALUES ('39', 'Corruption', 'Negligence to Duty', 'Rice-Bailey', 'Yost Inc', '2016-05-25 11:26:15', '3813 Ledner Cape Apt. 682\nWest Annamarie, ID 03756', 'Some of the earth. Let me see: I\'ll give them a railway station.) However, she soon made out what it was: at first was moderate. But the snail replied \"Too far, too far!\" and gave a little of her.', '1205323106.zip', '31', '2016-05-26 12:39:36', '2016-05-26 12:39:36');
INSERT INTO `reports` VALUES ('40', 'Crime', 'Theft', 'Hand, Armstrong and Kerluke', 'Nolan Inc', '2016-05-03 03:35:12', '316 Rachelle Flat Suite 848\nBrekkechester, IN 83678', 'I BEG your pardon!\' cried Alice in a rather offended tone, \'was, that the pebbles were all talking at once, in a confused way, \'Prizes! Prizes!\' Alice had been looking over his shoulder with some.', '1256983811.zip', '12', '2016-05-26 12:39:36', '2016-05-26 12:39:36');
INSERT INTO `reports` VALUES ('41', 'Public Hassle', 'Drainage', 'Dhaka South City Corporation', 'Dhaka South City Corporation', '2016-05-26 10:10:00', 'Dhaka', 'Laravel is built with testing in mind. In fact, support for testing with PHPUnit is included out of the box, and a phpunit.xml file is already setup for your application. The framework also ships with convenient helper methods allowing you to expressively test your applications.\r\nAn ExampleTest.php file is provided in the tests directory. After installing a new Laravel application, simply run phpunit on the command line to run your tests.', 'OutputShiftRegPROJ.zip_report_1464245435', '31', '2016-05-26 12:50:35', '2016-05-26 12:50:35');
INSERT INTO `reports` VALUES ('42', 'Corruption', 'Money Laundering', 'anti corruption commission', 'anti corruption commission', '2016-05-11 14:00:00', '1, Segun Bagicha, Dhaka 1000', '5 May 2016 10:42 am After talking with its new Chairperson and Vice-Chairperson, FORUM-ASIA met with the Secretary of Odhikar, Adilur Rahman Khan. Adilur has been re-elected for the second time in a row to represent its organisation in the Executive Committee of FORUM-ASIA. Adilur is a practicing lawyer of the Supreme Court of Bangladesh - See more at: http://odhikar.org/?cat=464#sthash.w8T52122.dpuf', 'report_1464245975_Faker-master.zip', '31', '2016-05-26 12:59:35', '2016-05-26 12:59:35');
INSERT INTO `reports` VALUES ('43', 'Public Hassle', 'Drainage', '', '', '2016-05-18 12:12:00', 'Dhaka', '5 May 2016 10:42 am After talking with its new Chairperson and Vice-Chairperson, FORUM-ASIA met with the Secretary of Odhikar, Adilur Rahman Khan. Adilur has been re-elected for the second time in a row to represent its organisation in the Executive Committee of FORUM-ASIA. Adilur is a practicing lawyer of the Supreme Court of Bangladesh - See more at: http://odhikar.org/?cat=464#sthash.w8T52122.dpuf', 'report_1464246258_Phoenix_x86_1_0_32_beta_zip.zip', null, '2016-05-26 13:04:18', '2016-05-26 13:04:18');
INSERT INTO `reports` VALUES ('44', 'Public Hassle', 'Factories', '', '', '2016-05-18 14:02:00', 'Dhaka', 'Khulna', 'report_1464249968_OutputShiftRegPROJ.zip', '31', '2016-05-26 14:06:08', '2016-05-26 14:06:08');
INSERT INTO `reports` VALUES ('45', 'General Complain', 'Public Harassment', '', '', '2016-05-25 12:12:00', 'Khulna', 'Dhaka', 'report_1464250038_dvr-implementation.zip', '31', '2016-05-26 14:07:18', '2016-05-26 14:07:18');
INSERT INTO `reports` VALUES ('46', 'Corruption', 'Embezzlement', '', '', '2016-05-13 12:12:00', 'Dhaka', 'Khulna', 'report_1464250183_dvr-implementation_2.zip', null, '2016-05-26 14:09:43', '2016-05-26 14:09:43');
INSERT INTO `reports` VALUES ('47', 'Corruption', 'Political Influence', '', '', '2016-05-24 14:22:00', 'Dhaka', 'Dhaka', 'report_1464250245_Faker-master.zip', null, '2016-05-26 14:10:45', '2016-05-26 14:10:45');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `national_id_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `occupation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_address` text COLLATE utf8_unicode_ci,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `personal_rating` double(8,2) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_contact_number_unique` (`contact_number`),
  UNIQUE KEY `users_email_address_unique` (`email_address`),
  UNIQUE KEY `users_national_id_number_unique` (`national_id_number`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Mr. Trever Morissette', '+1-503-399-9734', 'sage01@hotmail.com', '$2y$10$BkGVJwzGgQcc8vmcUVNTyu46gPlQN2frh21abOYVkm.IIyHlPnCSq', '4556489856642629', '1984-06-13', 'Nonfarm Animal Caretaker', 'Cultural Studies Teacher', '269 Morar Shoal\nEast Samsonfort, MA 51655-8615', 'reporter', '114.84', null, '2016-05-26 11:59:12', '2016-05-26 11:59:12');
INSERT INTO `users` VALUES ('2', 'Mervin Braun', '365.242.6960', 'trudie24@yahoo.com', '$2y$10$5rI0v3gZKJ3vGxwnauvXbegsO2ujG0OpyXe/DBA65D5rrByi0J86C', '5422237964533043', '1953-01-14', 'Veterinary Assistant OR Laboratory Animal Caretaker', 'Video Editor', '251 Sauer Spring Suite 664\nNorth Jaycee, OH 27552-3283', 'publisher', '101.29', null, '2016-05-26 11:59:12', '2016-05-26 11:59:12');
INSERT INTO `users` VALUES ('3', 'Ardella Mitchell', '637-415-6471', 'bernadine26@yahoo.com', '$2y$10$cR4vO/OrCnhVn/gEcYsIcOYRogPVVWJHTXz25yRhp7hHlRB2GaofS', '4929160781927365', '1976-04-15', 'Bindery Machine Operator', 'Sales Engineer', '4857 Vandervort Forks\nPort Chyna, IL 85331-8727', 'reviewer', '90.67', null, '2016-05-26 11:59:12', '2016-05-26 11:59:12');
INSERT INTO `users` VALUES ('4', 'Shanny Swift', '+1-487-396-7311', 'dortiz@yahoo.com', '$2y$10$/3NcfnOiYdDsUJiscAjNxO7c7ZnqKPsP3v6epaw4Xw5GfAgLj1dRC', '4556233850721868', '1946-03-11', 'Industrial Machinery Mechanic', 'Movie Director oR Theatre Director', '35490 Jimmy Trace\nLake Marionmouth, CO 47981-0381', 'reporter', '160.18', null, '2016-05-26 11:59:12', '2016-05-26 11:59:12');
INSERT INTO `users` VALUES ('5', 'Connor Mayer', '+1.504.535.5277', 'lulu38@gmail.com', '$2y$10$cQWKggNbYTV.4yHiBJ4jSOrXI8cuWVDFgOmXajn7fM5mwdLsndfF2', '4929630803996697', '1955-12-08', 'Utility Meter Reader', 'Precision Lens Grinders and Polisher', '95379 Hills Alley\nRosarioville, VT 01825', 'publisher', '153.22', null, '2016-05-26 11:59:12', '2016-05-26 11:59:12');
INSERT INTO `users` VALUES ('6', 'Destini Stamm', '1-978-509-1331', 'vrosenbaum@hotmail.com', '$2y$10$qe36f8xQaZIRjLSbWS2R.es945k/T7E3Ku8KEENW5lwpi8Qdi9LJG', '4024007179972970', '1925-05-03', 'Electronic Engineering Technician', 'Podiatrist', '48816 Wiley Cliffs Suite 218\nSouth Vanessa, MN 95843-9275', 'reviewer', '115.09', null, '2016-05-26 11:59:12', '2016-05-26 11:59:12');
INSERT INTO `users` VALUES ('7', 'Prof. Florence Schneider IV', '829.603.6705', 'mmckenzie@gmail.com', '$2y$10$5rVnFUXtRqzY96AWS4WxSuvWlk5IdBdKhlyIbsKPIGIfPpqi/gGju', '5233041734893482', '1972-05-22', 'Mechanical Inspector', 'Typesetting Machine Operator', '1864 Kshlerin Road Suite 296\nNew Deontaechester, MA 33030-6636', 'admin', '135.46', null, '2016-05-26 11:59:12', '2016-05-26 11:59:12');
INSERT INTO `users` VALUES ('8', 'Vivien Walter IV', '398-563-3857 x0204', 'pollich.zita@gmail.com', '$2y$10$mkp1wfjDtvfa67FIgQET3eedKW5sq.88rPKLSiVcN6NqPkEN8AmoO', '5242890208359985', '1984-06-13', 'Mine Cutting Machine Operator', 'Motorboat Operator', '93949 Maggie Underpass Apt. 627\nPort Jackelineport, MI 50369', 'authority', '96.84', null, '2016-05-26 11:59:12', '2016-05-26 11:59:12');
INSERT INTO `users` VALUES ('9', 'Name Hayes', '+18472047566', 'reyes93@yahoo.com', '$2y$10$MYJuQigH7hgClUCVyucFDeiDUNE9bBwi866Q/uldElkeLmKh.yKUm', '5172543021339023', '1956-05-21', 'Paralegal', 'Appliance Repairer', '1070 Schroeder Ridge\nLenoreburgh, AZ 06579', 'admin', '116.90', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('10', 'Jackie Gorczany Jr.', '+1-680-373-3565', 'mgleichner@yahoo.com', '$2y$10$e5UkXNkkS16s.sMO79pU0OAOCUF8vv6o3w9bUbK7.6vXSfl6CdsuG', '5143534502897262', '1922-10-14', 'Loan Interviewer', 'Bartender', '501 Weldon Rue\nReichertberg, NY 48088', 'publisher', '113.91', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('11', 'Karolann Ziemann', '(212) 748-6702 x8273', 'zbecker@hotmail.com', '$2y$10$bMdDVqOtPEeqjzJg8pz0KOI9ngqY9EKwivaeqlTIVvDZ5rqrlBilW', '4916258601010472', '1971-09-26', 'Postal Service Mail Sorter', 'Marketing VP', '5168 Rice Burgs Suite 676\nNew Rheaburgh, OH 84841-6149', 'reporter', '87.93', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('12', 'Prof. Logan Wilderman MD', '(448) 812-8100', 'vesta.dickens@gmail.com', '$2y$10$yPtAevzLu63P0.l2IiN7I.5/tQp/CTYGB75L5zq2mT7x4mDHPlN9m', '4539840287281', '1932-09-08', 'Human Resource Director', 'Social Sciences Teacher', '8672 Kaleigh Spurs Suite 616\nPort Cole, MI 26167-8130', 'admin', '148.84', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('13', 'Lowell Hettinger', '+1.247.654.4196', 'shanon.weissnat@gmail.com', '$2y$10$QuUonHyTb1MVVyieZIaLy.ZpBwEOaovAK4iP7VVZi7Lsk4OJPB.3G', '4556871593084266', '1978-09-08', 'Foundry Mold and Coremaker', 'Coaches and Scout', '325 Rosalee Springs\nSouth Wallaceland, AL 76809-4854', 'reviewer', '97.96', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('14', 'Olaf Mayert', '+1-261-632-9078', 'rstracke@yahoo.com', '$2y$10$fdg3PomVRYMacImnvI4Jbu8gT5hzg3juRgNyCheSx/tnPcgFVkTq6', '6011843227584866', '1984-06-13', 'Social Work Teacher', 'Customer Service Representative', '5789 Marks Land Apt. 753\nNew Ernestoport, KY 12900', 'reviewer', '132.84', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('15', 'Mr. Filiberto Kozey', '+1.349.642.5526', 'cremin.wava@hotmail.com', '$2y$10$nOTnpZiCQLATbvvfVTyQ6eLyrlv/8XJmbnVYSFGFetQ54998FcR5G', '4024007147180', '1920-07-23', 'Electrical Drafter', 'Chemical Technician', '760 Donato Valley\nStrackeville, MA 82114', 'reporter', '145.50', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('16', 'Alaina Parker', '445.605.9718 x101', 'larson.frederik@gmail.com', '$2y$10$LJCGqNUI.x7zScubR3PGZuw39lxyn0KHjTmtWE93I/q5PPDVjAPoe', '5269975588093227', '1950-11-06', 'Gas Appliance Repairer', 'Instrument Sales Representative', '62724 Heidenreich Drive\nSouth Linwoodport, MI 69135-9709', 'authority', '156.86', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('17', 'Prof. Felix Willms V', '1-683-828-2423', 'nreynolds@gmail.com', '$2y$10$Qih9HdEva7SUA9UOzzBjC.3P0.sN8I6dtLLLerxdCBQwfVo3BCjiq', '4916421619432605', '1948-09-18', 'Management Analyst', 'Athletic Trainer', '74199 Koss Isle\nYundtport, CT 29233-9231', 'publisher', '116.38', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('18', 'Oran Goyette', '448.682.8847', 'hilma.berge@gmail.com', '$2y$10$88Z3p2tLd45OBp3yjI30S.N2r9h5b/smbpThX6XBtW.UXi9mCCYHK', '5177941045182947', '1984-06-13', 'Hand Sewer', 'Deburring Machine Operator', '6210 Juanita Rest Apt. 838\nLake Aidanside, NH 75892', 'admin', '120.84', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('19', 'Prof. Emerson Spinka', '(886) 260-2611', 'jerod78@gmail.com', '$2y$10$WxigJwueOtQEwI4tZ7E6uuM8.JRg0BdLXrTe0iQXVmUA28BkXBcU.', '346466602980787', '1951-12-01', 'Graduate Teaching Assistant', 'Motor Vehicle Operator', '84686 Julio Light\nLake Whitneyfort, ME 04659', 'publisher', '132.09', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('20', 'Moshe Runolfsdottir', '+1-308-235-3656', 'daniella72@yahoo.com', '$2y$10$cqiEEy019hkkTi3okf5uIORSIxHQ35rPaquNM3FATtta8ha9ex3Om', '5441754561008440', '1959-04-20', 'Manager of Food Preparation', 'Lay-Out Worker', '723 Alyson Pike Suite 009\nEast Nicholausburgh, NY 29968', 'admin', '102.81', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('21', 'Terrill Altenwerth', '1-762-578-7854 x562', 'eduardo.leffler@yahoo.com', '$2y$10$VI33u6o3FIVFUf7m4jmptuuCXydISZsGmS5WzDSzeIl.oGLI5.lrW', '348512361295871', '1950-11-18', 'Compensation and Benefits Manager', 'Landscape Artist', '528 Dorris Forge\nPort Annettestad, GA 23182-3602', 'reviewer', '114.83', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('22', 'Mr. Wyman Wisozk Sr.', '+1 (501) 901-9561', 'cgorczany@yahoo.com', '$2y$10$1Wt6Q7VRJts5L5XBAuE/1ejs5u/JzjCFtYqNdY5F8AU1EmSsV424.', '4716330958633727', '1984-06-13', 'Electrical Engineer', 'Highway Maintenance Worker', '917 Bogisich Lock Apt. 271\nLindgrenburgh, NC 38243-7668', 'reviewer', '120.84', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('23', 'Ole Lueilwitz', '615.923.0386 x44222', 'fkuhn@hotmail.com', '$2y$10$dzIRZn02xY8nYM/.ohPOGOh0tXYc202VEVoB0PXtqs3ImZkIPGnCm', '5304587171515818', '1938-07-17', 'Home Economics Teacher', 'Gas Distribution Plant Operator', '179 Pouros Trafficway\nPeggiehaven, CT 99743', 'publisher', '165.65', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('24', 'Denis Roob', '+1-659-259-6008', 'cronin.kenton@yahoo.com', '$2y$10$NeXzKjT3Iggd.FbMAaoMa.ggaqX/6KEplqsWIuUKm3WD3F3wjXxku', '4556446058011920', '1949-07-26', 'Bindery Machine Operator', 'Statement Clerk', '504 Weissnat Island Suite 488\nParkerburgh, AR 82613', 'authority', '112.77', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('25', 'Rory Sauer', '(735) 694-5335', 'ogaylord@gmail.com', '$2y$10$qY8jc7ivxxlGRhXLaOhhsOXzYBJGYYepwtfHMLgGYf7DbTupQ4nnC', '4631843642962767', '1972-11-07', 'Engineering', 'General Practitioner', '77799 Kristopher Flat Apt. 376\nJonesmouth, AK 27219', 'admin', '111.13', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('26', 'Chelsey Feest', '960.218.2695', 'birdie.cormier@yahoo.com', '$2y$10$yDBiOXMjlE1HMM0tnMEHu.SoPDlu9uWHxlW6Kt7kDl2t.xSUofFBK', '5389130628006459', '1930-08-13', 'Communications Equipment Operator', 'Human Resources Manager', '1684 Conrad Estates Apt. 173\nWittington, NJ 53037-0422', 'reporter', '150.32', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('27', 'Gregg Little', '(443) 810-0133 x359', 'aisha03@yahoo.com', '$2y$10$HBxN/JRa25sCIwWi.CIsUebTICNeS3qq7qYtPIMlJieSf2uZn/8he', '6011104922011006', '1984-06-13', 'Account Manager', 'Archeologist', '3977 Konopelski Forges\nWest Miguel, NM 69047', 'admin', '78.84', null, '2016-05-26 11:59:13', '2016-05-26 11:59:13');
INSERT INTO `users` VALUES ('28', 'Julio Hickle', '1-864-655-5959', 'dante.fay@hotmail.com', '$2y$10$4v8ogL5D8jiewM4gBlYUxeTxcoTtXyk.XeYxvwjVV6eokOM.BCjnC', '341032653449141', '1929-07-26', 'Industrial Production Manager', 'School Bus Driver', '684 Deontae Drive\nFeestfort, TN 44295-5038', 'reporter', '133.07', null, '2016-05-26 11:59:14', '2016-05-26 11:59:14');
INSERT INTO `users` VALUES ('29', 'Ari Koelpin', '984.300.5282 x35654', 'dale97@gmail.com', '$2y$10$fjgU1C.1qTAwNY9jIDWRdeVoWp7Ehb9Hjg3hk.IZa2LqY5rS2kc4m', '5219586330639729', '1943-04-17', 'Radar Technician', 'Engineering Technician', '4614 Bogisich Way\nKenburgh, WY 94783', 'reporter', '138.26', null, '2016-05-26 11:59:14', '2016-05-26 11:59:14');
INSERT INTO `users` VALUES ('30', 'Garland Dicki', '836.465.3730 x77556', 'hcollier@gmail.com', '$2y$10$eY53/8CWhYN8AXkfCut8uu8ghlF2IoxJ0j7WP9koVpCf.nYKQtxbi', '5318587742909221', '1925-11-25', 'Marine Architect', 'Nuclear Power Reactor Operator', '4340 Herta Rue\nLake Dana, MA 68043', 'admin', '174.69', null, '2016-05-26 11:59:14', '2016-05-26 11:59:14');
INSERT INTO `users` VALUES ('31', 'Tarik Toha', '01625328088', 'tarik.toha@gmail.com', '$2y$10$M7wCjBN8lVXRTLFo/fhZM.eI9kzJAgDqQk9s/4RtIyXl5jNJSEUC6', '19954798526000181', '1995-12-25', 'Student', 'Nothing', '40, Nazirghat Main Road, Khulna', 'admin', '55.59', 'xe4WuZJUQlIVT1yiBUk0Lnh53uHTjduU657mdCLk6l3dKdTJbQQmEfoVfFub', '2016-05-26 12:02:37', '2016-06-03 03:47:34');
INSERT INTO `users` VALUES ('32', 'Alyson Barton', '1-784-499-4929 x516', 'kking@yahoo.com', '$2y$10$7rB2i2.yYbSkmiBbILnAVuOx6JMJsThpVg.iC6Qn9pblgA1/yMpOa', '4916553525591635', '1971-12-21', 'Heating and Air Conditioning Mechanic', 'Statistical Assistant', '2015 Cordie Valleys\nNew Elmo, MD 14761-0176', 'reporter', '114.76', null, '2016-05-26 12:32:03', '2016-05-26 12:32:03');
INSERT INTO `users` VALUES ('33', 'Camren Hermiston', '331-490-6745', 'mattie.towne@hotmail.com', '$2y$10$7JsghWxUKT7dkMHeTZbOte5Rsv/A5l.Yg9uCfZicx1I3Jz7FXB0ya', '5497617370992026', '1967-05-15', 'Physical Therapist', 'Audio and Video Equipment Technician', '60465 Fredy Square\nNorth Emilio, AR 85398-6920', 'authority', '145.05', null, '2016-05-26 12:32:03', '2016-05-26 12:32:03');
INSERT INTO `users` VALUES ('34', 'Dr. Darren Kuphal', '1-667-351-7820 x25274', 'frances.dickens@hotmail.com', '$2y$10$lLfECRz9EL1samAETpuASuzMPitoOSBR3pB00f1IwkXsIH4DkByPC', '4532506705704', '1984-06-13', 'Structural Metal Fabricator', 'Telephone Operator', '964 Waters Square\nLittelside, KS 74711-3998', 'admin', '96.84', null, '2016-05-26 12:32:03', '2016-05-26 12:32:03');
INSERT INTO `users` VALUES ('35', 'Jazmin Goldner', '782-568-7274 x5107', 'murphy.erin@yahoo.com', '$2y$10$G7BZQxvlerVrFf4YSYuF3OKDvqDIiOgYdN2QbV1cJtRaZPKVyYHEq', '5409164422195016', '1981-08-23', 'Insurance Investigator', 'Potter', '805 Walter Lodge Suite 033\nLake Jackeline, RI 22129', 'reporter', '62.84', null, '2016-05-26 12:32:03', '2016-05-26 12:32:03');
INSERT INTO `users` VALUES ('36', 'Colleen Yundt', '235-743-8460 x21041', 'larson.elise@hotmail.com', '$2y$10$jP7TNmO92YgxNlTKJqJbfuqZF2ZNWhD1oQmwuIF30ep9T8vrdSxdK', '5436394088026141', '1984-06-13', 'Private Detective and Investigator', 'Central Office Operator', '7414 Sophie Pike Suite 230\nBeerland, OK 33061-1856', 'publisher', '111.84', null, '2016-05-26 12:32:03', '2016-05-26 12:32:03');
INSERT INTO `users` VALUES ('37', 'Bertha Gerlach', '473-803-5762 x6623', 'harley20@gmail.com', '$2y$10$9posfEtHhs3HiQpaoDYhpOrE8Kjy.7Qif7PJ7zVEn3m88QnAFvVru', '5469461252560922', '1934-10-16', 'Construction Driller', 'Gaming Dealer', '25242 Wiza Burgs Apt. 781\nSouth Levimouth, CT 36160', 'reviewer', '117.33', null, '2016-05-26 12:40:59', '2016-05-26 12:40:59');
INSERT INTO `users` VALUES ('38', 'Mr. Christ Dibbert', '(235) 491-6033 x258', 'krajcik.meaghan@yahoo.com', '$2y$10$WpSao6AazTHskv9azUU5R.Xj0L.F4pFwSxW6AoRHEaywpaG0Lsi9a', '5316926445807864', '1978-10-01', 'Hairdresser OR Cosmetologist', 'Physician', '780 Cicero Shoals Suite 311\nPort Ivory, MT 91032', 'publisher', '73.91', null, '2016-05-26 12:40:59', '2016-05-26 12:40:59');
INSERT INTO `users` VALUES ('39', 'Ms. Estrella Halvorson', '(239) 639-7060', 'rankunding@gmail.com', '$2y$10$DhqTWZeKgeHIG/rkb8Q0vOQNTzfcogNdeghHPL0.2zWB/yR6NajM2', '342881159963982', '1972-04-28', 'Irradiated-Fuel Handler', 'Chemical Plant Operator', '94507 Gerry Ramp Apt. 529\nFunkton, DE 30239', 'publisher', '120.50', null, '2016-05-26 12:40:59', '2016-05-26 12:40:59');
INSERT INTO `users` VALUES ('40', 'Kolby Beier', '861.694.5484 x87151', 'felipa.padberg@hotmail.com', '$2y$10$zomvnbHqfEw0O/ZLx0EHxeBBd3v7uenS46VDOP1jEC54bAejhtFv2', '5456134476112565', '1984-06-13', 'Professional Photographer', 'Command Control Center Specialist', '3954 Oma Corners\nWehnerstad, MD 28321', 'publisher', '132.84', null, '2016-05-26 12:41:00', '2016-05-26 12:41:00');
INSERT INTO `users` VALUES ('41', 'Mina Stanton', '+12704636789', 'reagan.koepp@gmail.com', '$2y$10$twBrJm2ZjRyk2hxdreHWf.yDjSmQdW499MCIIfEoB5IzZjMRLEKO.', '5271342420189943', '1984-06-13', 'Pharmacist', 'Marine Engineer', '642 Eldon Estates\nEast Queenieport, AK 82650-7956', 'reviewer', '87.84', null, '2016-05-26 12:41:00', '2016-05-26 12:41:00');
INSERT INTO `users` VALUES ('42', 'Marcelina Collins', '+1-596-795-5631', 'nat11@hotmail.com', '$2y$10$I6v5ZuxSNIIj0vy2ewFPoeazty2XG3Pkay9qZDcGYrNByznTodjpO', '6011873281022867', '1984-06-13', 'Electronic Drafter', 'Punching Machine Setters', '6484 Anahi Estates\nWest Michale, MO 65845', 'admin', '114.84', null, '2016-05-26 12:41:00', '2016-05-26 12:41:00');
INSERT INTO `users` VALUES ('43', 'Kacey Ryan Jr.', '929.948.5912 x775', 'abbey53@yahoo.com', '$2y$10$XC1mXYz8NK3zJ43URO4ppOx1hyzLzPTpzV6d5MRf8m01ShAEhZpNu', '4532089457115931', '1962-10-10', 'Assembler', 'Aircraft Engine Specialist', '21093 Hamill Extension\nPort Clevelandmouth, OR 05616-0691', 'publisher', '136.33', null, '2016-05-26 12:41:00', '2016-05-26 12:41:00');
INSERT INTO `users` VALUES ('44', 'Hubert Bednar', '339-206-2877 x838', 'luettgen.aurore@hotmail.com', '$2y$10$A5mvfHj/cF3GGvOY4F9YFuti5bMFQ3jurSA3A/F86BY7V8qpUiwTG', '6011070407612800', '1916-09-08', 'Central Office and PBX Installers', 'Internist', '481 Jillian Forge\nEddside, VA 08809-8485', 'reviewer', '118.27', null, '2016-05-26 12:41:00', '2016-05-26 12:41:00');
INSERT INTO `users` VALUES ('45', 'Lenny Steuber', '1-478-216-6994', 'marquise76@hotmail.com', '$2y$10$rl3v3HVhKy3BWXiWMrwyA.EN1TAOzSPUumEz5mqr8IRDosbdbTrBS', '4124787003007', '1958-06-25', 'Driver-Sales Worker', 'Park Naturalist', '29586 Rau Ridges Apt. 492\nWest Jadynhaven, OH 04207', 'publisher', '106.40', null, '2016-05-26 12:41:00', '2016-05-26 12:41:00');
INSERT INTO `users` VALUES ('46', 'Ms. Dasia Goldner III', '216.426.0914 x18835', 'johnson.colten@hotmail.com', '$2y$10$Q0juPaquVJX1viSIEMEbEeojiLNcjVshB0I9OsolOgGE8IEuo0YuS', '4916725975935', '1943-06-10', 'Record Clerk', 'Social Service Specialists', '976 Ivah Center Apt. 413\nNew Timmy, NE 43681', 'publisher', '150.15', null, '2016-05-26 12:41:00', '2016-05-26 12:41:00');

-- ----------------------------
-- Function structure for `Age`
-- ----------------------------
DROP FUNCTION IF EXISTS `Age`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `Age`(`Date_Of_Birth` DATE) RETURNS float
BEGIN
	RETURN DATEDIFF(CURDATE(),Date_Of_Birth)/365;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `countReviews`
-- ----------------------------
DROP FUNCTION IF EXISTS `countReviews`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `countReviews`(`reportID` int) RETURNS int(11)
BEGIN
	DECLARE reviews INT;
	SELECT COUNT(*) INTO reviews 
	FROM users JOIN opinions ON (users.id = reporter_id) 
	WHERE report_id = reportID AND (user_type = 'reviewer' OR user_type = 'admin');
	RETURN reviews;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `personalRating`
-- ----------------------------
DROP FUNCTION IF EXISTS `personalRating`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `personalRating`(`dateOfBirth` date,`designation` varchar(30),`contactAddress`  varchar(30)) RETURNS float
BEGIN
	RETURN (Age(dateOfBirth) / 70) * 50 + (CHAR_LENGTH(designation) / 10) * 30 + (CHAR_LENGTH(contactAddress) / 30) * 20;
END
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `before_users_insert`;
DELIMITER ;;
CREATE TRIGGER `before_users_insert` BEFORE INSERT ON `users` FOR EACH ROW BEGIN 
SET NEW.personal_rating = personalRating(NEW.date_of_birth, NEW.designation, NEW.contact_address);
END
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `before_users_update`;
DELIMITER ;;
CREATE TRIGGER `before_users_update` BEFORE UPDATE ON `users` FOR EACH ROW BEGIN
IF NEW.date_of_birth <> OLD.date_of_birth THEN
	SET NEW.personal_rating = personalRating(NEW.date_of_birth, OLD.designation, OLD.contact_address);
ELSEIF NEW.designation <> OLD.designation THEN
	SET NEW.personal_rating = personalRating(OLD.date_of_birth, NEW.designation, OLD.contact_address);
ELSEIF NEW.contact_address <> OLD.contact_address THEN
	SET NEW.personal_rating = personalRating(OLD.date_of_birth, OLD.designation, NEW.contact_address);
END IF;	
END
;;
DELIMITER ;
