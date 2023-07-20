function kilogramsWeight(unitOfMass, mass) {

  switch(unitOfMass) {
    case 1: return mass;
    case 2: return mass * 1e6;
    case 3: return mass * 1e3;
    case 4: return mass * 1e-3;
    case 5: return mass * 1e-2;
  }

}