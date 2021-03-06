-- Database for topic

create table topics (
    t_id    serial not null primary key,    -- topic ID
    name    varchar(20) not null            -- Faith, Sacrifice, Charity
);

insert into topics (name) values ('Faith');
insert into topics (name) values ('Sacrifice');
insert into topics (name) values ('Charity');

-- Database for scriptures

create table scriptures (
    s_id    serial not null primary key,    -- scripture ID
    book    varchar(80) not null,           -- Book of scripture
    chapter int not null,                   -- Chapter with in the book
    verse   int not null,                   -- Verse with in the chapter
    content text not null                   -- The scripture
);

insert into scriptures (book, chapter, verse, content)
    values ('John', 1, 5, 'And the light shineth in darkness; and the darkness comprehended it not.');
insert into scriptures (book, chapter, verse, content)
    values ('Doctrine and Covenants', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not, nevertheless, the day shall come when you shall comprehend even God, being quickened in him by him.');
insert into scriptures (book, chapter, verse, content)
    values ('Doctrine and Covenants', 93, 28, 'He that keepeth his commandments receiveth truth and light, until he is glorified in the truth and knoweth all things.');
insert into scriptures (book, chapter, verse, content)
    values ('Mosiah', 16, 9, 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');
insert into scriptures (book, chapter, verse, content)
    values ('Hebrews', 11, 4, ' By faith Abel offered unto God a more excellent sacrifice than Cain, by which he obtained witness that he was righteous, God testifying of his gifts: and by it he being dead yet speaketh.');

-- Many-to-many Database
    
create table topicLinks (
    tl_id       serial not null primary key,                -- link ID
    topics_fk   int references topics(t_id),         -- topic foreign key
    script_fk   int references scriptures(s_id)      -- scripture foreign key
);

INSERT INTO topicLinks (topics_fk, script_fk) VALUES (1, 5);




























































