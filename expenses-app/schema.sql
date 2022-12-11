create table categories (
    id int not null auto_increment,
    name varchar(255) not null,
    primary key (id)
);

create table expenses (
    id int not null auto_increment,
    title varchar(255) not null,
    category_id int not null,
    expense float(5, 2) not null,
    date_created date not null,
    primary key (id),
    foreign key (category_id) references categories (id)
);