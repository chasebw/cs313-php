SELECT p.name
FROM w5_PARTICIPANT p
JOIN w5_EVENT_PARTICIPANT ep
ON p.id = ep.participant_id
WHERE ep.event_id = (SELECT id from w5_EVENT e WHERE e.name LIKE 'Toughman Utah')
ORDER BY p.name;


