CREATE DATABASE Wiki;
USE Wiki;

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(25),
    Email VARCHAR(25) NOT NULL,
    user_pwd VARCHAR(255) NOT NULL,
    user_Role VARCHAR(25),
    CONSTRAINT User_Role_Ck CHECK(user_Role IN ('Admin', 'Author'))
);

CREATE TABLE categories (
    cat_id INT AUTO_INCREMENT PRIMARY KEY,
    cat_name VARCHAR(50)
);

CREATE TABLE wikis (
    wiki_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(25),
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULL,
    img VARCHAR(50),
    user_id INT,
    cat_id INT,
    CONSTRAINT wikis_user_id FOREIGN KEY (user_id) REFERENCES users(user_id),
    CONSTRAINT wikis_cat_id FOREIGN KEY (cat_id) REFERENCES categories(cat_id)
);

CREATE TABLE tags (
    tag_id INT AUTO_INCREMENT PRIMARY KEY,
    tag_name VARCHAR(50)
);

CREATE TABLE wikis_tags (
    tag_id INT,
    wiki_id INT,
    PRIMARY KEY (tag_id, wiki_id),
    CONSTRAINT tags_wikis_tag_id FOREIGN KEY (tag_id) REFERENCES tags(tag_id),
    CONSTRAINT tags_wikis_wiki_id FOREIGN KEY (wiki_id) REFERENCES wikis(wiki_id)
);
