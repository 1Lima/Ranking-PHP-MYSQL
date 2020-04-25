# Ranking-PHP-MYSQL

Tabela de classificados por pontos

## Créditos

Criado por [Acacio De Lima](https://twitter.com/limadeacacio)

## SQL

```
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `points` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
```
