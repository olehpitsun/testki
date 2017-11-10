package patterns.builder;

/**
 * Created by Oleh on 10.11.2017.
 */
public class BuildImageRunner {

    public static void main(String[] args) {
        Director director = new Director();

        director.setBuilder(new ImageFiltrationBuilder());

        Image image = director.buildImage();

        System.out.println(image);
    }
}
