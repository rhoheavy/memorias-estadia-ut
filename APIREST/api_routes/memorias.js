const { Router } = require('express');
const router = Router();


const memorias = require ('../datos.json')

router.get('/', (req, res) => {
    res.json(memorias);
});

module.exports = router;