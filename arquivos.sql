--Select de todos os represantes por cidade:

SELECT r.*
FROM representantes AS r
INNER JOIN cidades AS c ON r.cidade_id = c.id
WHERE c.id = :cidade_id;  -- Substitua :cidade_id pelo ID da cidade desejada
------------------------------------------------------------------------

--Select de cliente com representantes que podem atende-lo

select * from representantes as r 
	inner join cidades as c ON r.cidade_id = c.id 
  inner join clientes as cl ON c.id = cl.cidade_id
  where cl.id = 6;





