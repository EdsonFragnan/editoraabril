CREATE TABLE IF NOT EXISTS 'pedido' (
  'id_pedido' varchar(10) CHARACTER SET utf8 NOT NULL,
  'id_produto' varchar(10) CHARACTER SET utf8 NOT NULL,
  'id_cliente' varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY ('id_pedido')
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO 'pedido' ('id_pedido', 'id_produto', 'id_cliente') VALUES ();

