

public class Test {

	public static void main(String[] args) {

		Person taro = new Person();
		taro.name = "山田太郎";
		taro.age = 20;

		System.out.println(taro.name);
		System.out.println(taro.age);

		Person jiro = new Person();
		jiro.name = "木村次郎";
		jiro.age = 18;
		System.out.println(jiro.name);
		System.out.println(jiro.age);

		Person hanako = new Person();
		hanako.name = "鈴木花子";
		hanako.age = 16;
		System.out.println(hanako.name);
		System.out.println(hanako.age);

		Person miku = new Person();
		miku.name = "神田美紅";
		miku.age = 23;
		System.out.println(miku.name);
		System.out.println(miku.age);

		taro.talk();
		taro.walk();
		taro.run();

		Robot aibo = new Robot();
		aibo.name = "aibo";

		aibo.talk();
		aibo.walk();
		aibo.run();


		Robot asimo =new Robot();
		asimo.name="asimo";

		asimo.talk();
		asimo.walk();
		asimo.run();


		Robot pepper=new Robot();
		pepper.name="pepper";

		pepper.talk();
		pepper.walk();
		pepper.run();




	}


}
