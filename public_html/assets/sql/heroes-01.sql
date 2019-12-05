
CREATE TABLE `heroes` (
  `id`      int NOT NULL,
  `name`    varchar(255) NOT NULL,
  `class`   varchar(63) NOT NULL,
  `level`   int DEFAULT NULL,
  `image`   varchar(255) NOT NULL,
  `pronoun` varchar(15) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=UTF8MB4;
