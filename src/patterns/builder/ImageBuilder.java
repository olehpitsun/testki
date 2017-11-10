package patterns.builder;

/**
 * Created by Oleh on 10.11.2017.
 */
public abstract class ImageBuilder {

    Image image;

    void createImage(){
        image = new Image();
    }

    abstract void buildPath();
    abstract void buildHeight();
    abstract void buildWidth();
    abstract void buildProcessingType();

    Image getImage(){
        return image;
    }
}
