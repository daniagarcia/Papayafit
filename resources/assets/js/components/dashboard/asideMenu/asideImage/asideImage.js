import Supernova from "../../../../development/objects/SupernovaApps"
const supernova = new Supernova()

export default {
  data() {
    return {
      scope: this,
      name: "",
      image: ""
    };
  },
  methods: {
    getData(scope) {
      scope.name = "Supernova Apps Mx"
      scope.image = "S"
    }
  },
  created() {
    let scope = this;
    this.getData(scope);
  }
}