 const basePrices = {
      rwd: 38990,
      long_range: 45990,
      performance: 54990
    };

    const colorOptions = [
      { id: 'pearl_white', name: 'Pearl White', price: 0, color: '#fff' },
      { id: 'deep_blue', name: 'Deep Blue', price: 1000, color: '#0f2d52' },
      { id: 'solid_black', name: 'Solid Black', price: 1500, color: '#000' },
      { id: 'ultra_red', name: 'Ultra Red', price: 2000, color: '#a00000' },
      { id: 'stealth_grey', name: 'Stealth Grey', price: 2000, color: '#555' }
    ];

    const interiorOptions = [
      { id: 'black', name: 'All Black', price: 0, color: '#000' },
      { id: 'white', name: 'Black & White', price: 1000, color: '#fff' }
    ];

    const wheelOptions = [
      { id: '18', name: '18" Aero', price: 0 },
      { id: '19', name: '19" Sport', price: 1500 },
      { id: '20', name: '20" Überturbine', price: 0, restrictedTo: 'performance' }
    ];

    let selectedModel = 'rwd';
    let selectedColor = 'pearl_white';
    let selectedInterior = 'black';
    let selectedWheel = '18';

    function updateSelection(groupId, selectedId) {
      const group = document.getElementById(groupId);
      Array.from(group.children).forEach(btn => {
        btn.classList.remove('selected');
        if (btn.dataset.id === selectedId) btn.classList.add('selected');
      });
    }

    function updatePrice() {
      let total = basePrices[selectedModel];
      total += colorOptions.find(o => o.id === selectedColor).price;
      total += interiorOptions.find(o => o.id === selectedInterior).price;
      const wheel = wheelOptions.find(o => o.id === selectedWheel);
      if (wheel.id === '20' && selectedModel !== 'performance') {
        alert('As rodas Überturbine estão disponíveis apenas para o modelo Performance.');
        selectedWheel = '18';
        updateSelection('wheelsButtons', '18');
        return updatePrice();
      }
      total += wheel.price;
      document.getElementById('totalPrice').textContent = `$${total.toLocaleString()}`;
    }

    function createButtons(options, groupId, callback, colorBased = false) {
      const container = document.getElementById(groupId);
      options.forEach(opt => {
        const btn = document.createElement('div');
        btn.className = colorBased ? 'option-button' : 'wheel-button';
        btn.style.backgroundColor = colorBased ? opt.color : '';
        btn.textContent = colorBased ? '' : opt.name;
        btn.title = opt.name;
        btn.dataset.id = opt.id;
        btn.addEventListener('click', () => {
          callback(opt.id);
          updateSelection(groupId, opt.id);
          updatePrice();
        });
        container.appendChild(btn);
      });
    }

    createButtons([
      { id: 'rwd', name: 'RWD' },
      { id: 'long_range', name: 'Long Range' },
      { id: 'performance', name: 'Performance' }
    ], 'modelButtons', (id) => selectedModel = id);

    createButtons(colorOptions, 'colorOptions', (id) => selectedColor = id, true);
    createButtons(wheelOptions, 'wheelsButtons', (id) => selectedWheel = id);
    createButtons(interiorOptions, 'interiorOptions', (id) => selectedInterior = id, true);

    updateSelection('modelButtons', selectedModel);
    updateSelection('colorOptions', selectedColor);
    updateSelection('interiorOptions', selectedInterior);
    updateSelection('wheelsButtons', selectedWheel);

    updatePrice();

    document.getElementById('buyButton').addEventListener('click', () => {
      alert('Compra realizada com sucesso!');
    });