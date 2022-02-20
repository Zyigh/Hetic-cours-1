INSERT INTO `album`
    (`name`, `page_title`, `slug`, `image`, `image_alt`, `published_at`)
VALUES
    ('Taylor Swift', 'Taylor Swift', 'taylor-swift', 'taylor-swift.jpg', 'Taylor Swift Album', '2006-10-24'),
    ('Fearless', 'Fearless', 'fearless', 'fearless.jpg', 'Fearless Album', '2008-11-11'),
    ('Speak Now', 'Speak Now', 'speak-now', 'speak-now.jpg', 'Speak Now Album', '2010-10-25'),
    ('Red', 'RED ❤️', 'red', 'red.jpg', 'Red Album - Her best', '2012-10-22'),
    ('1989', '1989', '1989', '1989.jpg', '1989 Album - TOTAL BANGER', '2014-10-27'),
    ('Reputation', '🐍 Reputation 🐍', 'reputation', 'reputation.jpg', 'Reputation Album', '2017-11-10'),
    ('Lover', 'Lover', 'lover', 'lover.jpg', 'Lover Album', '2019-08-23'),
    ('Folklore', 'Folklore', 'folklore', 'folklore.jpg', 'Folklore Album', '2020-07-24'),
    ('Evermore', 'Evermore', 'evermore', 'evermore.jpg', 'Evermore Album', '2020-12-11'),
;

INSERT INTO `song`
    (`album_id`, `name`, `clip_id`, `duration`, `position`)
VALUES ();
