
---profesores de un acta------------
SELECT profe_id, profe_nombre, profe_apellido, creador, estuve FROM profesores NATURAL JOIN profesores_actas WHERE acta_id=3;



---Acuerdos de un acta------------
SELECT acuerdo_id, acuerdo_detalle FROM acuerdos WHERE acta_id=3 ;


--- Asuntos de un acta------------
SELECT asunto_id, asunto_detalle FROM asuntos WHERE acta_id=4 ;


-----Actas-------

SELECT * FROM actas;