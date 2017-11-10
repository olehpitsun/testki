package patterns.builder;

/**
 * Created by Oleh on 10.11.2017.
 */
public class Director {

    ImageBuilder builder;

    public void setBuilder(ImageBuilder builder) {
        this.builder = builder;
    }

    Image buildImage(){
        builder.createImage();
        builder.buildPath();
        builder.buildHeight();
        builder.buildWidth();
        builder.buildProcessingType();

        Image image = builder.getImage();

        return image;
    }
    
}
