# CSV Quini 6 MVP

UTF-8, separado por comas, encabezado obligatorio/recomendado:

`sorteo,fecha,hora,tipo,n1,n2,n3,n4,n5,n6`

Ejemplo:

`3379,03/06/2026,21:15,1,07,08,23,27,40,42`

Tipos: 1 Tradicional; 2 La Segunda; 3 Revancha; 4 Siempre Sale.

Duplicado idéntico: se omite. Mismo sorteo/modalidad con números diferentes: conflicto, no sobrescribe.
