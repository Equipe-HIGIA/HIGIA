create database higia_tes;

 USE HIGIA;
use higia_tes;

CREATE TABLE USUARIO(
id int primary key auto_increment,
cpf varchar(14) not null,
senha varchar(128) not null,
nome varchar(255) not null,
endereco varchar(255) not null,
numero int not null,
cep varchar(11) not null,
cidade int not null,
celular varchar(20) not null,
fixo varchar(20),
email varchar(255) not null,
genero char(1)

)ENGINE = innodb;

create table profissional(
id int primary key auto_increment,
paginas varchar(255),
especialidade varchar(255) not null,
qualificacao varchar(255) not null,
ambiente char(1),
grupo int default 1,
localatendimento char(1),
servico text,
raio decimal(6,2),
idades varchar(255),
especial char(1) default 'S',
usuario_id int,
 FOREIGN KEY (fk_profissional_usuarios) REFERENCES profissional (usuario_id) ON UPDATE CASCADE ON DELETE RESTRICT
 
)ENGINE = innodb;

-- alter table profissional add constraint fk_profissional_usuario foreign key (usuario_id) references usuario(id);

-- alter table profissional add foreign key(usuario_id) references usuario(id);

create table cliente(
id int primary key auto_increment,
nivel int,
medicamentos varchar(255),
usuario_id int,
 FOREIGN KEY (fk_cliente_usuario) REFERENCES cliente (usuario_id) ON UPDATE CASCADE ON DELETE RESTRICT
 
)ENGINE = innodb;

-- alter table cliente add constraint fk_cliente_usuario foreign key (usuario_id) references usuario(id);

-- alter table cliente add foreign key(usuario_id) references usuario(id);

create table cliente_profissional(
id int primary key auto_increment,
cliente_id int,
profissional_id int,
data timestamp,
comentario varchar(255),
nota int,


 FOREIGN KEY (fk_profissional) REFERENCES cliente_profissional (profissional_id) ON UPDATE CASCADE ON DELETE RESTRICT,
 FOREIGN KEY (fk_cliente) REFERENCES cliente_profissional (cliente_id) ON UPDATE CASCADE ON DELETE RESTRICT
 
)ENGINE = innodb;
-- alter table cliente_profissional  add foreign key(cliente_id) references cliente(id);

-- alter table cliente_profissional  add foreign key(profissional_id) references profissional(id);
 
-- alter table cliente_profissional add constraint fk_cliente_profissional_cliente foreign key (cliente_id) references cliente(id);

-- alter table cliente_profissional add constraint fk_cliente_profissional_profissional foreign key (profissional_id) references profissional(id);





















