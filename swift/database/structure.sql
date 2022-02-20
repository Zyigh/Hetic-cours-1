CREATE TABLE `album`
(
    id           INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name         VARCHAR(50)  NOT NULL,
    page_title   VARCHAR(50)  NOT NULL DEFAULT 'Taylor Swift',
    slug         VARCHAR(50)  NOT NULL,
    image        VARCHAR(150) NOT NULL,
    image_alt    VARCHAR(125),
    published_at DATETIME     NOT NULL,

    CONSTRAINT album_pk PRIMARY KEY (`id`),
    INDEX slug_idx (`slug`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

CREATE TABLE `song`
(
    id       INT UNSIGNED      NOT NULL AUTO_INCREMENT,
    album_id INT UNSIGNED      NOT NULL,
    name     VARCHAR(100)      NOT NULL,
    clip_id  VARCHAR(11) DEFAULT NULL,
    duration SMALLINT UNSIGNED NOT NULL,
    position SMALLINT UNIQUE   NOT NULL,

    INDEX album_id_idx (`album_id`),
    CONSTRAINT song_pk PRIMARY KEY (`id`),
    FOREIGN KEY (`album_id`) REFERENCES album (`id`) ON DELETE CASCADE
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;
