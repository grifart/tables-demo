create table test
(
	id   uuid    not null
		constraint test_id_pk
			primary key,
	name varchar not null
);

create table advanced
(
	id         uuid                not null
		constraint advanced_id_pk
			primary key,
	name       varchar             not null,
	listoftags character varying[] not null
);

