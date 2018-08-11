SELECT Authors.Name
FROM [Authors-books] INNER JOIN Authors ON [Authors-books].idauthor = Authors.Код
GROUP BY Authors.Name, [Authors-books].idauthor
HAVING (((Count([Authors-books].idauthor))>=7));
